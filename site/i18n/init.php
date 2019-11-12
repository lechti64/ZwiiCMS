<?php	


/*
* Pour ajouter une langue et son drapeau
* Il s'agit bien d'un drapeau relatif à une langue etnon à un pays, on ne doit donc pas insérer de pays comme la Belgique ou la Suisse.
*
* Soit la langue est disponible dans la liste prédéfinie, il suffit de supprimer les deux // de commentaire
* Soit la langue n'est pas disponible, complétez le tableau en ajoutant 
*  1 - Le code iso sur deux caractères en vous  référant à cette page https://fr.wikipedia.org/wiki/ISO_3166-1 
*  2 - Le nom de la langue en texte en clair, le rappel du code iso est facultatif
*  3 - Enfin, créez  dans le dossier png le drapeau de la langue au format png dimensions 30x20 pixels
*
* Le dernier élément de la liste n'a pas besoin de ,
*/

$i18nOptions = [
	//'bg'	=> 'Bulgare (bg)',
	//'dk'	=> 'Danois (dk)',
	//'fi'	=> 'Finnois (fi)',		
	//'is' 	=> 'Islandais (is)',		
	//'no'	=> 'Norvégien (no)',
	//'se'	=> 'Suédois (se)',
	//'ro'	=> 'Roumain (ro)',
	//'cz'	=> 'Tchèque (cz)'
	//'tr'	=> 'Turc (tr)'
	// Langues régionales
	//'eu'	=> 'Basque (eu)',
	//'br'	=> 'Breton (br)',
	//'co'	=> 'Corse (co)',
	//'ha'	=> 'Flamand (ha)',
	//'oc'	=> 'Occitan (oc)',
	//'pi'	=> 'Picard (pi)'
];

// ----------------------------------
// Ne rien modifier ci-dessous
// Vérifier l'existence des drapeaux
foreach ($i18nOptions as $itemKey => $itemValue) {
	if (file_exists(self::I18N_DIR .  'png/' . $itemKey . '.png') === false) {
		unset($i18nOptions[$itemKey]);
	}
}
// Incorporer les nouvelles langues valides
self::$i18nList = array_merge (self::$i18nList, $i18nOptions);
