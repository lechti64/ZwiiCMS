<?php

class search extends common {

	public static $actions = [
		'index' => self::GROUP_VISITOR,
	];

// Liste de fonctions correspondant aux vues

	public function index() {
		if($this->isPost()) {
			// Récupération de l'ensemble des données d'un site ZWII
			// Lire le fichier core.json si il existe
			// Traitement du formulaire
			$success = true;
			$result = '';
			if(file_exists ('./site/data/core.json')) {
				$json_source = file_get_contents('./site/data/core.json');

				// Décoder le JSON en un array
				$array = json_decode($json_source,true);

				// Récupération du mot clef passé par le formulaire de ...view/index.php, avec caractères accentués
				$motclef=$this->getInput('searchMotphraseclef');

				$result = '<h1>Recherche avec le mot clef : '.$motclef.'<br/></h1>';
				if ($motclef !== "" && strlen($motclef) > 2) {
					$dejavu = '';
					$nboccutotal = 0;
					foreach ($array as $key1 => $value1) {
						// Déterminer le chemin de tous les contenus (content) dans page ou module
						if (($key1 ==='page' || $key1 ==='module') && is_array($value1) )
						{
							foreach ($value1 as $key2 => $value2) 
							{
								if (is_array($value2))
								{
									foreach ($value2 as $key3 => $value3) 	{
										if ($key3 === "content" && is_string($value3)) 	{
											// compte le nombre d'occurrences dans la page
											$nboccu=0;
											// le contenu à explorer est dans $value3, le nom de la page est $key2
											//Nettoyage de $value3 : on enlève tout ce qui est inclus entre < et >
											$value3=$this->nettoyer_html($value3);
											//accentuation
											$value3=html_entity_decode($value3);
											// Recherche et affichage des occurrences
											do 	{
												$occu = stristr($value3,$motclef);
												if ($occu !== '') 	{
													if ($key2!=$dejavu) {
														$result .= '<p><br/>Mot clef trouv&eacute; dans la page : <a href="./?'.$key2.'" target="_blank" rel="noopener">'.$key2.'</a><br/></p>';
													}
													$dejavu=$key2;
													$nboccu++;
													//Affichage d'un extrait de $value3
													$result .= '<p>'.$nboccu.' - "...<em>'.substr($occu,0,200).'</em>..."<br/></p>';
													//pour recherche d'une autre occurence dans le même contenu
													$value3=substr($occu,100);											
												}
											} while($occu != '');
											$dejavu = '';
											$nboccutotal = $nboccutotal + $nboccu;
											$nboccu = 0;
										} elseif ($key1 == "module" && is_array($value3)) {
											foreach ($value3 as $key4 => $value4)  {	
												if ($key4 == "content" && is_string($value4) ) 	{
													$nboccu = 0;
													// le contenu à explorer est dans $value4, le nom du module/page est $key2/$key3
													//Nettoyage de $value4 : on enlève tout ce qui est inclus entre < et >
													$value4 = $this->nettoyer_html($value4);
													//accentuation
													$value4 = html_entity_decode($value4);
													// Recherche et affichage des occurrences
													do 	{
														$occu = stristr($value4,$motclef);
														if ($occu != '') {
															if ($key3 != $dejavu) {
																$result .= '<p><br/>Mot clef trouv&eacute; dans la page : <a href="./?'.$key2.'/'.$key3.'" target="_blank" rel="noopener">'.$key2.'/'.$key3.'</a><br/></p>';
															}
															$dejavu = $key3;
															$nboccu++;
															$result .= '<p>'.$nboccu.' - "...<em>'.substr($occu,0,200).'</em>..."<br/></p>';
														}
														//pour recherche d'une autre occurrence dans le même contenu
														$value4 = substr($occu,100);
													} while($occu != '');
													$dejavu = '';
													$nboccutotal = $nboccutotal + $nboccu;
													$nboccu = 0;
												}					
											}
										}			
									}
								}
							}
						}
					}
					if ($nboccutotal==0) {
						$notification = '<p><br/>Mot clef non trouv&eacute;, avez-vous pens&eacute; aux accents ?</p> ';
						$success = false;
					} else { 
						$result .= '<p><br/>Nombre total d\'occurrences : '.$nboccutotal.'</p>';
						$notification = 'Nombre total d\'occurrences : '.$nboccutotal; 
						$success = true;
					}
				} else {
					$notification = 'Trop court ! minimum 3 caract&egrave;res';
					$result = '<p><br/>Trop court ! minimum 3 caract&egrave;res</p>';
					$success = false;
				}
				
			} else { 
				$notification = 'Fichier core.json introuvable'; 
				$success = false;
			}
			$_POST['result'] = $result;
			$_POST['occurence'] = $nboccutotal; 
			// Valeurs en sortie, affichage du résultat
			$this->addOutput([
				'title' => 'Rechercher dans le site',
				'view' => 'result',
				'notification' => $notification,
				'state' => $success
			]);
		} else {
			// Valeurs en sortie, affichage du formulaire
			$this->addOutput([
				'title' => 'Rechercher dans le site',
				'view' => 'index'
			]);	
		}
	}

	/* Déclaration de la fonction nettoyer(string $contenu) : string
	* Supprime de $contenu les caractères placés entre < et >, donc les balises html comme <p> <br/> etc...
	* Retourne $contenu nettoyée, le résultat est sensiblement différent de celui obtenu avec la fonction strip_tags()
	*/
	private function nettoyer_html($contenu){
		do {
			$pos1=strpos($contenu,chr(60));
			if($pos1!==false) {
				$pos2=strpos($contenu,chr(62));
				if($pos2!==false) $contenu=substr_replace($contenu," ",$pos1,($pos2 - $pos1 + 1));
			}
		} while($pos1!==false);
		return $contenu;
	}

}
?>