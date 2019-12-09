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

class review extends common {

	public static $actions = [
		'ratings' => self::GROUP_MODERATOR,
		'ratingsDelete' => self::GROUP_MODERATOR,
		'config' => self::GROUP_MODERATOR,
		'edit' => self::GROUP_MODERATOR,
		'index' => self::GROUP_VISITOR
	];

	public static $iconGrades = [
		'3' => '3 valeurs',
		'4' => '4 valeurs',
		'5' => '5 valeurs',
		'6' => '6 valeurs',
	];

	public static $reviews = [];

	public static $articles = [];

	public static $ratings = [];

	public static $pages;

	public static $states = [
		false => 'Brouillon',
		true => 'Publié'
	];

	public static $users = [];

	const REVIEW_VERSION = '1.0';


	/**
	 * Configuration du module d'avis
	 */

	public function config() {
		if($this->isPost()) {
			$this->setData(['module', $this->getUrl(0), [
				'grades' => $this->getInput ('reviewConfigGrades',helper::FILTER_INT),
				'minusZero' => $this->getInput ('reviewConfigMinusZero',helper::FILTER_BOOLEAN),
				'mailNotification' => $this->getInput ('reviewConfigmailNotification',helper::FILTER_BOOLEAN),
				'groupNotification' => $this->getInput ('reviewConfigGroupNotification',helper::FILTER_INT),
				'closeRatings' => $this->getInput ('reviewConfigCloseRatings',helper::FILTER_BOOLEAN),				
				'ratings' => $this->getData(['module',$this->getUrl(0),'ratings'])
			]]);
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => helper::baseUrl() . $this->getUrl(),
				'notification' => 'Modifications enregistrées',
				'state' => true
			]);

		} else {
			// Valeurs en sortie
			$this->addOutput([
				'title' => 'Configuration des avis',
				'view' => 'config'
			]);
		}
	}

	/**
	 * Edition des avis déposés
	 */
	public function edit() {
		$this->addOutput([
			'title' => 'Edition des avis',
			'view' => 'edit',
		]);
	}

	/**
	 * Liste des commentaires
	 */
	public function ratings() {
		// Liste les commentaires
		$comments = [];
		foreach((array) $this->getData(['module', $this->getUrl(0)]) as $articleId => $article) {
			foreach($article['comment'] as &$comment) {
				$comment['articleId'] = $articleId;
			}
			$comments += $article['comment'];
		}
		// Ids des commentaires par ordre de création
		$commentIds = array_keys(helper::arrayCollumn($comments, 'createdOn', 'SORT_DESC'));
		// Pagination
		$pagination = helper::pagination($commentIds, $this->getUrl(),$this->getData(['config','itemsperPage']));
		// Liste des pages
		self::$pages = $pagination['pages'];
		// Commentaires en fonction de la pagination
		for($i = $pagination['first']; $i < $pagination['last']; $i++) {
			// Met en forme le tableau
			$comment = $comments[$commentIds[$i]];
			self::$comments[] = [				
				utf8_encode(strftime('%d %B %Y - %H:%M', $comment['createdOn'])),
				$comment['content'],
				$comment['userId'] ? $this->getData(['user', $comment['userId'], 'firstname']) . ' ' . $this->getData(['user', $comment['userId'], 'lastname']) : $comment['author'],
				template::button('blogCommentDelete' . $commentIds[$i], [
					'class' => 'blogCommentDelete buttonRed',
					'href' => helper::baseUrl() . $this->getUrl(0) . '/comment-delete/' . $comment['articleId'] . '/' . $commentIds[$i] . '/' . $_SESSION['csrf'] ,
					'value' => template::ico('cancel')
				])
			];
		}
		// Valeurs en sortie
		$this->addOutput([
			'title' => 'Gestion des commentaires',
			'view' => 'comment'
		]);
	}

	/**
	 * Suppression de commentaire
	 */
	public function ratingsDelete() {
		// Le commentaire n'existe pas
		if($this->getData(['module', $this->getUrl(0), $this->getUrl(2), 'comment', $this->getUrl(3)]) === null) {
			// Valeurs en sortie
			$this->addOutput([
				'access' => false
			]);
		}
		// Jeton incorrect
		elseif ($this->getUrl(4) !== $_SESSION['csrf']) {
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => helper::baseUrl()  . $this->getUrl(0) . '/config',
				'notification' => 'Action non autorisée'
			]);
		}	
		// Suppression
		else {
			$this->deleteData(['module', $this->getUrl(0), $this->getUrl(2), 'comment', $this->getUrl(3)]);
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => helper::baseUrl() . $this->getUrl(0) . '/comment',
				'notification' => 'Commentaire supprimé',
				'state' => true
			]);
		}
	}

	/**
	 * Configuration
	 */
	public function grade() {
		// Ids des articles par ordre de publication
		$ratingsIds = array_keys(helper::arrayCollumn($this->getData(['module', $this->getUrl(0)],'ratings'), 'publishedOn', 'SORT_DESC'));
		// Pagination
		$pagination = helper::pagination($ratingsIds, $this->getUrl(),$this->getData(['config','itemsperPage']));
		// Liste des pages
		self::$pages = $pagination['pages']; 
		// Articles en fonction de la pagination
		for($i = $pagination['first']; $i < $pagination['last']; $i++) {
			// Met en forme le tableau
			self::$reviews[] = [
				$this->getData(['module', $this->getUrl(0), $review[$i], 'title']),
				// date('d/m/Y H:i', $this->getData(['module', $this->getUrl(0), $articleIds[$i], 'publishedOn'])),
				utf8_encode(strftime('%d %B %Y', $this->getData(['module', $this->getUrl(0), $ratingsIds[$i], 'publishedOn'])))
				.' à '.
				utf8_encode(strftime('%H:%M', $this->getData(['module', $this->getUrl(0), $ratingsIds[$i], 'publishedOn']))),				
				self::$states[$this->getData(['module', $this->getUrl(0), $ratingsIds[$i], 'state'])],
				template::button('blogConfigEdit' . $ratingsIds[$i], [
					'href' => helper::baseUrl() . $this->getUrl(0) . '/edit/' . $ratingsIds[$i] . '/' . $_SESSION['csrf'],
					'value' => template::ico('pencil')
				]),
				template::button('blogConfigDelete' . $ratingsIds[$i], [
					'class' => 'blogConfigDelete buttonRed',
					'href' => helper::baseUrl() . $this->getUrl(0) . '/delete/' . $ratingsIds[$i] . '/' . $_SESSION['csrf'],
					'value' => template::ico('cancel')
				])
			];
		}
		// Valeurs en sortie
		$this->addOutput([
			'title' => 'Configuration du module',
			'view' => 'config'
		]);
	}

	/**
	 * Suppression
	 */
	public function delete() {
		if($this->getData(['module', $this->getUrl(0), $this->getUrl(2)]) === null) {
			// Valeurs en sortie
			$this->addOutput([
				'access' => false
			]);
		}
		// Jeton incorrect
		elseif ($this->getUrl(3) !== $_SESSION['csrf']) {
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => helper::baseUrl()  . $this->getUrl(0) . '/config',
				'notification' => 'Action non autorisée'
			]);
		}			
		// Suppression
		else {
			$this->deleteData(['module', $this->getUrl(0), $this->getUrl(2)]);
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => helper::baseUrl() . $this->getUrl(0) . '/config',
				'notification' => 'Article supprimé',
				'state' => true
			]);
		}
	}


	/**
	 * Accueil (deux affichages en un pour éviter une url à rallonge)
	 */
	public function index() {
		// Soumission du formulaire
		if($this->isPost()) {

			// Crée le commentaire
			$this->setData(['module', $this->getUrl(0), 'ratings', [
				'rateId ' => uniqid(),
				'rateGrade' => $this->getInput('ratingsGrades', helper::FILTER_INT, true),
				'comment' => $this->getInput('ratingsComment', helper::FILTER_STRING_LONG, true),				
				'comment' => $this->getInput('ratingsComment', helper::FILTER_STRING_LONG, true),				
				'publishedOn' => time(),				
			]]);
			$this->saveData();
			// Envoi d'une notification aux administrateurs
			// Init tableau
			$to = [];
			// Liste des destinataires	
			foreach($this->getData(['user']) as $userId => $user) {
				if ($user['group'] >= $this->getData(['module', $this->getUrl(0), 'groupNotification']) ) {
					$to[] = $user['mail'];
				}
			}
			// Envoi du mail $sent code d'erreur ou de réusssite
				if ($this->getData(['module', $this->getUrl(0), $this->getUrl(1), 'mailNotification']) === true) {
					$sent = $this->sendMail(
						$to,
						'Nouveau commentaire',
						'Bonjour' . ' <strong>' . $user['firstname'] . ' ' . $user['lastname'] . '</strong>,<br><br>' .
						'Nouveau commentaire déposé sur la page "' . $this->getData(['page', $this->getUrl(0), 'title']) . '" :<br><br>'
					);
					// Valeurs en sortie
					$this->addOutput([
						'redirect' => helper::baseUrl() . $this->getUrl() . '#comment',
						//'notification' => 'Commentaire ajouté',
						//'state' => true
						'notification' => ($sent === true ? 'Commentaire ajouté et une notification envoyée' : 'Commentaire ajouté, erreur de notification : <br/>' . $sent),
						'state' => ($sent === true ? true : null)												
					]);

				} else {
					// Valeurs en sortie
					$this->addOutput([
						'redirect' => helper::baseUrl() . $this->getUrl() . '#comment',
						'notification' => 'Commentaire ajouté',
						'state' => true											
					]);
				}
			// Valeurs en sortie
			$this->addOutput([
				'showBarEditButton' => true,
				'title' => $this->getData(['module', $this->getUrl(0), $this->getUrl(1), 'title']),
				'view' => 'article'
			]);
		} // Listes des notes
		else {
			// Ids des articles par ordre de publication

			$ratingsIds = helper::arrayCollumn($this->getData(['module', $this->getUrl(0),'ratingss']), 'publishedOn', 'SORT_DESC');
			// Pagination
			$pagination = helper::pagination($ratingsIds, $this->getUrl(),$this->getData(['config','itemsperPage']));
			// Liste des pages
			self::$pages = $pagination['pages'];
			// Articles en fonction de la pagination
			for($i = $pagination['first']; $i < $pagination['last']; $i++) {
				self::$ratings[$ratingsIds[$i]] = $this->getData(['module', $this->getUrl(0), $ratingsIds[$i]]);
			}
			// Valeurs en sortie
			$this->addOutput([
				'showBarEditButton' => true,
				'showPageContent' => true,
				'view' => 'index'
			]);
		}
	}
}