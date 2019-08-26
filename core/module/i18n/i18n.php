<?php

/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Frédéric Tempez <frederic.tempez@outlook.com>
 * @copyright Copyright (C) 2018-2019, Frédéric Tempez
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

class i18n extends common {

	public static $actions = [
		'index' => self::GROUP_MODERATOR,
		'lan' => self::GROUP_VISITOR
	];


	
	public function lan () {
		// Traitement du changement de langue
		if (isset($_POST['i18nSelect'])) {
			$this->seti18n($_POST['i18nSelect']);
			// Valeurs en sortie sans post			
			$this->addOutput([
				'redirect' 		=> 	helper::baseUrl(false),
				'notification'	=> 'Langue modifiée',
				'state'			=> true
			]);	
		}
	}

    /**
	 * Configuration
	 */
	public function index() { 
		// Traitement du changement de langue
		if (isset($_POST['i18nSelect'])) {
			$this->seti18n($_POST['i18nSelect']);
			// Valeurs en sortie sans post			
			$this->addOutput([
				'redirect' 		=> 	helper::baseUrl(false),
				'notification'	=> 'Langue modifiée',
				'state'			=> true
			]);	
		}
		
		// Retour du formulaire
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
				if (is_dir(self::DATA_DIR . $create) === false) {
					$copyFrom = $copyFrom === '' ? 'core/module/i18n/ressource/' : self::DATA_DIR . $copyFrom . '/';
					// Créer le dossier
					$success ['create'] = mkdir (self::DATA_DIR . $create);
					// Copier les données par défaut 
					$success ['create'] = (copy ($copyFrom . 'module.json', self::DATA_DIR . $create . '/module.json') === true && $success ['create'] === true) ? true : false;
					$success ['create'] = (copy ($copyFrom . 'page.json', self::DATA_DIR . $create . '/page.json') === true && $success ['create'] === true) ? true : false;
				}
				// Valeurs en sortie
				$notification = $success['create'] === true ? self::$i18nList[$create] . ' installée' : self::$i18nList[$create] . ' déjà installée' ;
			} 
			// Mode effacement 			
			if (!empty ($remove)) {				
				// La langue est celle par défaut : effacement bloqué
				
				// Une notification existe déjà, insérer un séparateur
				if ($notification) {
						$notification .= ' | ';
				}
				if ( $remove !== $this->getData(['i18n','frontend'])) {
					// Le dossier existe  ?
					if (is_dir(self::DATA_DIR . $remove) === true) {
						$success ['remove'] = unlink (self::DATA_DIR . $remove . '/module.json');
						$success ['remove'] = (unlink (self::DATA_DIR . $remove . '/page.json') && $success ['remove'] === true) ? true : false ;
						$success ['remove'] = (rmdir (self::DATA_DIR . $remove) === true  && $success ['remove'] === true) ? true : false ;;
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

}