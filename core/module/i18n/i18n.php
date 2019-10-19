<?php

/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Frédéric Tempez <frederic.tempez@outlook.com>
 * @copyright Copyright (C) 2018-2020, Frédéric Tempez
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

class i18n extends common {

	public static $actions = [
		'index' => self::GROUP_MODERATOR,
		//'config' => self::GROUP_MODERATOR,
		'lang' => self::GROUP_VISITOR
	];


    /**
	 * Config : gestion des langues
	 */
	public function index() { 
		
		if($this->isPost()) {
			// Et faire un backup
			// Fonction à révoir dans core.php

			// Récupérer les données du formulaire
			$create = $this->getInput('i18nLanguageAdd');			
			$remove = $this->getInput('i18nLanguageRemove');
			$copyFrom = $this->getInput('i18nLanguageCopyFrom');
			$notification = '';
			$success = array ('create' => false,'remove'=> false);
			
			// Mode Création
			if (!empty ($create)) {
				// Mode création de langue
				// La langue est déja créée ?
				if (in_array($create,$this->i18nInstalled()) === false) {
					$copyFrom = $copyFrom === '' ? 'core/module/i18n/ressource/' : self::DATA_DIR . $copyFrom . '/';
					// Créer le dossier
					if (is_dir(self::DATA_DIR . $create) === false ) {
						$success ['create'] = mkdir (self::DATA_DIR . $create);
					} else {
						$success ['create'] = true;
					}				
					// Copier les données par défaut 
					$success ['create'] = (copy ($copyFrom . 'module.json', self::DATA_DIR . $create . '/module.json') === true && $success ['create'] === true) ? true : false;
					$success ['create'] = (copy ($copyFrom . 'page.json', self::DATA_DIR . $create . '/page.json') === true && $success ['create'] === true) ? true : false;
				}
				// Valeurs en sortie
				$notification = $success['create'] === true ? self::$i18nList[$create] . ' installée' : self::$i18nList[$create] . ' déjà installée' ;
			} 
			// Mode effacement 			
			if (!empty ($remove)) {				
				
				// Une notification existe déjà, insérer un séparateur
				if ($notification) {
						$notification .= ' | ';
				}
				// Suppression impossible langue actuelle ou fr
				if ( $remove !== $this->geti18n()) {
					// Le dossier existe  ?
					if (is_dir(self::DATA_DIR . $remove) === true) {
						$success ['remove'] = unlink (self::DATA_DIR . $remove . '/module.json');
						$success ['remove'] = (unlink (self::DATA_DIR . $remove . '/page.json') && $success ['remove'] === true) ? true : false ;
						$success ['remove'] = (rmdir (self::DATA_DIR . $remove) === true  && $success ['remove'] === true) ? true : false ;
					}	
					// Valeurs en sortie
					$notification .= $success['remove'] === true ? self::$i18nList[$remove] .' effacée' : self::$i18nList[$remove] . ' n\'existe pas' ;
				} else {
					// Valeurs en sortie
					$success ['remove'] = false;
					$notification .= self::$i18nList[$remove] . ' est active, effacement impossible';
				}
			}
			
			$this->addOutput([
				'notification'  =>  $notification,
				'title' 		=> 'Internationalisation',
				'view' 			=> 'index',
				'state' 		=>  $success ['create'] || $success ['remove']
			]);			

		} else {
			// Valeurs en sortie sans post
			$this->addOutput([
				'title' 		=> 'Internationalisation',
				'view' 			=> 'index'
			]);												
		
		}
	}

		/*
	* Traitement du changement de langues
	*/
	public function lang() {
		if ( isset($_POST)) {
			// Clic dans le menu par l'utilisateur
			if (strlen(array_keys($_POST)[0]) === 4) {
				$lan = substr(array_keys($_POST)[0],0,2);
			// Clic dans le menu de la barre d'administration
			} elseif (  isset($_POST['i18nSelect'])) {
				$lan = $_POST['i18nSelect'];
			}
		}
		// Traitement du changement de langue
		if (isset($lan)) {
			$this->seti18n($lan);
			// Valeurs en sortie sans post
			$this->addOutput([
				'redirect' 		=> 	helper::baseUrl(false),
				'notification'	=> 'Langue modifiée',
				'state'			=> true
			]);							
		} else {
			$this->addOutput([
				'redirect' 		=> 	helper::baseUrl(false)
			]);	
		}	


	}

}