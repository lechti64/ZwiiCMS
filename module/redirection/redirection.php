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

class redirection extends common {

	public static $actions = [
		'config' => self::GROUP_MODERATOR,
		'index' => self::GROUP_VISITOR
	];
	public static $openIn = [
		'tab' => 'Un nouvel onglet',
		'lity' => 'Une popup intégrée',
		'popup' => 'Une popup',
		'window' => 'La fenêtre'
	];

	const REDIRECTION_VERSION = '1.4';

	/**
	 * Configuration
	 */
	public function config() {
		// Soumission du formulaire
		if($this->isPost()) {
			$this->setData(['module', $this->getUrl(0), [ 
				'url' => $this->getInput('redirectionConfigUrl', helper::FILTER_URL, true),
				'target' => $this->getInput('redirectionConfigTarget'),
			]]);
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => helper::baseUrl() . $this->getUrl(),
				'notification' => 'Modifications enregistrées',
				'state' => true
			]);
		}
		// Valeurs en sortie
		$this->addOutput([
			'title' => 'Configuration du module',
			'view' => 'config'
		]);
	}

	/**
	 * Accueil
	 */
	public function index() {
		// Message si l'utilisateur peut éditer la page
		if(
			$this->getUser('password') === $this->getInput('ZWII_USER_PASSWORD')
			AND $this->getUser('group') >= self::GROUP_MODERATOR
			AND $this->getUrl(1) !== 'force'
		) {
			// Valeurs en sortie
			$this->addOutput([
				'display' => self::DISPLAY_LAYOUT_BLANK,
				'title' => '',
				'view' => 'index'
			]);
		}
		// Sinon redirection
		else {
			// Incrémente le compteur de clics
			$this->setData(['module', $this->getUrl(0), 'count', helper::filter($this->getData(['module', $this->getUrl(0), 'count']) + 1, helper::FILTER_INT)]);

			switch ($this->getData(['module', $this->getUrl(0), 'target'])) {
				case 'tab':
					$script = ' window.history.back();
							    window.open("' . $this->getData(['module',$this->getUrl(0), 'url'])  . '", "_blank");';
					break;
				case 'lity':
					$script = '$(document).on("lity:close", function(event, instance) {
									location.replace("' . helper::baseURl() . '");
								});
								// Open a URL in a lightbox
								var lightbox = lity("'. $this->getData(['module',$this->getUrl(0), 'url']) .'");

								// Bind as an event handler
								$(document).on("click", "[data-lightbox]", lity);';
					break;
				case "popup":
					$script = ' window.history.back();
								window.open("' . $this->getData(['module',$this->getUrl(0), 'url'])  . '", "_blank", "toolbar=0,location=0,menubar=0");';
								break;
				case 'window':
					$script = '';					
			}
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => $this->getData(['module', $this->getUrl(0), 'url']),
				'script' =>  $script,
				'state' => true
			]);
		}
	}
}