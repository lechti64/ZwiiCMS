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

	public static $users = [];


	/**
	 * Ajout
	 */
	public function index() {
		// Soumission du formulaire
		if($this->isPost()) {
			$check=true;
			// L'identifiant d'utilisateur est indisponible
			$userId = $this->getInput('registrationAddId', helper::FILTER_ID, true);
			if($this->getData(['registration', $userId])) {
				self::$inputNotices['registrationAddId'] = 'Identifiant déjà utilisé';
				$check=false;
			}
			// Double vérification pour le mot de passe
			if($this->getInput('registrationAddPassword', helper::FILTER_STRING_SHORT, true) !== $this->getInput('registrationAddConfirmPassword', helper::FILTER_STRING_SHORT, true)) {
				self::$inputNotices['registrationAddConfirmPassword'] = 'Incorrect';
				$check = false;
			}
			// Le mail existe déjà
			foreach($this->getData(['user']) as $userId => $user) {
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
						'forgot' => 0,
						'group' =>  NULL,
						'lastname' => $userLastname,
						'mail' => $userMail,
						'password' => $this->getInput('registrationAddPassword', helper::FILTER_PASSWORD, true),
						// Timer
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
					'<strong>Mot de passe du compte :</strong> ' . $this->getInput('registrationAddPassword') . '<br><br>' .
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
					'Bonjour,<p>Pour confirmer votre inscription, cliquez sur le lien ci-dessous</p>' . 
					'<a href="' . $validateLink . '">' . $validateLink . '</a>'
				);
			}
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => $validateLink,
				//'redirect' => $this->getUrl(0),
				'notification' => $sentMailtoUser  ? 'Inscription en cours de validation' : '',
				'state' => $sentMailtoUser ? true : null
			]);
		}		
		// Valeurs en sortie
		$this->addOutput([
			'title' => ucfirst($this->getUrl(0)) ,
			'view' => 'index'
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
		// 5 minutes + clé d'authentification
		if ( 
			( time() - $this->getData(['user',$userId,'timer']) < 300 ) &&
			( $_SESSION['csrf'] == $csrf) )	{					
				$check=true;
		}
		if ($check === true) {
			$this->setData([
				'user',
				$userId,
				[
					'firstname' => $this->getData(['user',$userId,'firstname']),
					'forgot' => 0,
					'group' =>  self::GROUP_VISITOR,
					'lastname' => $this->getData(['user',$userId,'lastname']),
					'mail' => $this->getData(['user',$userId,'mail']),
					'password' => $this->getData(['user',$userId,'password'])
				]
			]);	
			$this->saveData();		
		}
		// Valeurs en sortie
		$this->addOutput([
			'title' => ucfirst($this->getUrl(0)),
			'view' => 'validate'
			]);	
	}

	/**
	 * Module de configuration
	 */
	public function config() {
		// Soumission du formulaire
		if($this->isPost()) {
			// Lire les options et les enregistrer
		}
		// Valeurs en sortie
		$this->addOutput([
			'title' => 'Configuration',
			'view' => 'config'
		]);
	}
}
