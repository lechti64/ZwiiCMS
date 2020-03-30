<?php

/**
 * This file is part of Zwii.
 *
 * For full copyright and license information, please see the LICENSE
 * file that was distributed with this source code.
 *
 * @author Rémi Jean <remi.jean@outlook.com>
 * @copyright Copyright (C) 2008-2018, Rémi Jean
 * @license GNU General Public License, version 3
 * @link http://zwiicms.com/
 */

class registration extends common {

	public static $actions = [
		'index' => self::GROUP_VISITOR,
		'config' => self::GROUP_ADMIN,
		'validate' => self::GROUP_VISITOR
		];

	public static $timeLimit = [
		'1' => '1 minute',
		'2' => '2 minutes',
		'3' => '3 minutes',
		'4' => '5 minutes',
		'5' => '5 minutes'
		];

	public static $users = [];


	const REGISTRATION_VERSION = '0.1';


	/**
	 * Ajout
	 */
	public function index() {
		// Soumission du formulaire
		if($this->isPost()) {
			$check=true;
			// L'identifiant d'utilisateur est indisponible
			$userId = $this->getInput('registrationAddId', helper::FILTER_ID, true);
			if($this->getData(['module','registration', $userId])) {
				self::$inputNotices['registrationAddId'] = 'Identifiant déjà utilisé';
				$check=false;
			}
			// Double vérification pour le mot de passe
			if($this->getInput('registrationAddPassword', helper::FILTER_STRING_SHORT, true) !== $this->getInput('registrationAddConfirmPassword', helper::FILTER_STRING_SHORT, true)) {
				self::$inputNotices['registrationAddConfirmPassword'] = 'Incorrect';
				$check = false;
			}
			// Le mail existe déjà
			foreach($this->getData(['user']) as $usersId => $user) {
				if($user['mail'] ===  $this->getInput('registrationAddMail', helper::FILTER_MAIL, true) ) {
					self::$inputNotices['registrationAddMail'] = 'Mail déjà utilisé';
					$check = false;
					break;
				}
			}
			// Crée l'utilisateur
			$userFirstname = $this->getInput('registrationAddFirstname', helper::FILTER_STRING_SHORT, true);
			$userLastname = $this->getInput('registrationAddLastname', helper::FILTER_STRING_SHORT, true);
			$userMail = $this->getInput('registrationAddMail', helper::FILTER_MAIL, true);
			$userTimer = $this->getInput('registrationAddTimer', helper::FILTER_INT, true);
			// Pas de nom saisi
			if (empty($userFirstname) || 
				empty($userLastname)  || 
				empty($this->getInput('registrationAddPassword', helper::FILTER_STRING_SHORT, true)) ||
				empty($this->getInput('registrationAddConfirmPassword', helper::FILTER_STRING_SHORT, true))) {
				$check=false;
			}
			// Si tout est ok création effective temporaire		
			if ($check === true) {
				$this->setData([
					'user',
					$userId,
					[
						'firstname' => $userFirstname,
						'lastname' => $userLastname,
						'mail' => $userMail,
						'password' => $this->getInput('registrationAddPassword', helper::FILTER_PASSWORD, true),
						'group' =>  self::GROUP_BANNED, 
						'forgot' => 0,
						'timer' => $userTimer
					]
				]);
			}

			// Mail d'avertissement aux administrateurs
			// Utilisateurs dans le groupe admin
			$to = [];
			foreach($this->getData(['user']) as $userId => $user) {
				if($user['group'] == self::GROUP_ADMIN) {
					$to[] = $user['mail'];
				}
			}
			// Envoi du mail
			if($to) {
				$sentMailAdmin = false;
				// Envoi le mail
				$sentMailAdmin = $this->sendMail(
					$to,
					'Compte créé sur ' . $this->getData(['config', 'title']),
					'Bonjour <strong>'.
					'<strong>Identifiant du compte :</strong> ' . $this->getInput('registrationAddId') . '<br>' .
					'<small>Nous ne conservons pas les mots de passe, par conséquence nous vous conseillons de garder ce mail tant que vous ne vous êtes pas connecté. Vous pourrez modifier votre mot de passe après votre première connexion.</small>'
				);
			}
			// forger le lien de vérification 
			$validateLink = helper::baseUrl(true) . $this->getUrl() . '/validate/' . $userId . '/' . $_SESSION['csrf'];
			// Mail de confirmation à l'utilisateur
			$sentMailtoUser = false;
			if($check === true) {
				$sentMailtoUser = $this->sendMail(
					$userMail,
					'Confirmation d\'inscription',
					$this->getdata(['module','registration',$this->getUrl(0),'config','mailContent']),
					'<a href="' . $validateLink . '">' . $validateLink . '</a>'
				);
			}
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => $validateLink,
				//'redirect' => helper::baseUrl(),
				'notification' => $sentMailtoUser  ? 'Inscription en cours de validation' : '',
				'state' => $sentMailtoUser ? true : null
			]);
		}		
		// Valeurs en sortie
		$this->addOutput([
			'title' => 'Configuration',
			'view' => 'index',
			'showBarEditButton' => true,
			'showPageContent' => true
		]);
	}

	/**
	 * Vérification de l'email
	 */
	public function validate() {
		
		// Vérifie la session + l'id + le timer + 5 minutes
		$check= false;
		$csrf = $this->getUrl(3);
		$userId = $this->getUrl(2);		
		
		if ( 
			( time() - $this->getData(['user',$userId,'timer']) <= (60 * $this->getdata(['module','registration',$this->getUrl(0),'config','pageTimeOut'])) ) &&
			( $_SESSION['csrf'] == $csrf) )	{					
				$check=true;
		}
		if ($check === true) {
			$this->setData([
				'user',
				$userId,
				[
					'firstname' => $this->getData(['user',$userId,'firstname']),
					'lastname' => $this->getData(['user',$userId,'lastname']),
					'mail' => $this->getData(['user',$userId,'mail']),
					'password' => $this->getData(['user',$userId,'password']),
					'group' =>  $this->getdata(['module','registration',$this->getUrl(0),'config','registrationConfigState']) ? self::GROUP_BANNED : self::GROUP_VISITOR,
					'forgot' => 0
				]
			]);	
			$this->savedata();
		}
		// Valeurs en sortie
		$this->addOutput([
			'redirect' => $check ? helper::baseUr() .  $this->getdata(['module','registration',$this->getUrl(0),'config','pageSuccess']) : helper::baseUr() . $this->getdata(['module','registration',$this->getUrl(0),'config','pageError']) , 
			'state' => $check
		]);
	}

	/**
	 * Module de configuration
	 */
	public function config() {
		// Soumission du formulaire
		if($this->isPost()) {
			// Lire les options et les enregistrer
			$this->setData(['module','registration',$this->getUrl(0),'config', [
				'timeOut' => $this->getInput('registrationConfigTimeOut',helper::FILTER_INT),
				'pageSuccess' => $this->getInput('registrationConfigSuccess'),
				'pageError' => $this->getInput('registrationConfigError'),
				'state' => $this->getInput('registrationConfigState',helper::FILTER_BOOLEAN),
				'mailContent' => $this->getInput('registrationconfigMailContent', helper::FILTER_STRING_LONG, true)
			]]);
			$this->addOutput([
				'redirect' => helper::baseUrl() . $this->getUrl(),
				'notification' => 'Modifications enregistrées',
				'state' => true
			]);
		}
		// Valeurs en sortie
		$this->addOutput([
			'title' => 'Configuration',
			'view' => 'config',
			'vendor' => ['tinymce']
		]);
	}
}
