<?php
class install extends common {
    public static $defaultData = [
		'config' => [
			'analyticsId' => '',
			'autoBackup' => true,
			'cookieConsent' => true,
			'favicon' => 'favicon.ico',
			'homePageId' => 'accueil',
			'maintenance' => false,
			'metaDescription' => 'Zwii est un CMS sans base de données qui permet de créer et gérer facilement un site web sans aucune connaissance en programmation.',
			'social' => [
				'facebookId' => 'facebook',
				'instagramId' => '',
				'pinterestId' => '',
				'twitterId' => '',
				'youtubeId' => '',
				'youtubeUserId' => '',
				'githubId' => ''
			],
			'timezone' => 'Europe/Paris',
			'title' => 'Zwii, votre site en quelques clics !',
			'itemsperPage' => 10,
			'legalPageId' => 'mentions-legales'
		],
		'core' => [
			'dataVersion' => 0,
			'lastBackup' => 0,
			'lastClearTmp' => 0,
			'baseUrl' => ''
		],
		'page' => [
			'accueil' => [
			'typeMenu' => 'text',
                	'iconUrl' => '',
                	'disable' => false,
			'content' => '<h3>Bienvenue sur votre nouveau site Zwii !</h3>
							  <p><strong>Un email contenant le récapitulatif de votre installation vient de vous être envoyé.</strong></p>
							  <p>Connectez-vous dès maintenant à votre espace membre afin de créer un site à votre image ! Vous pourrez personnaliser le thème, créer des pages, ajouter des utilisateurs et bien plus encore !</p>
							  <p>Si vous avez besoin d\'aide ou si vous cherchez des informations sur Zwii, n\'hésitez pas à jeter un œil à notre <a title="Forum" href="https://forum.zwiicms.com/">forum</a>.</p>',
			'hideTitle' => false,
			'breadCrumb' => false,
			'metaDescription' => '',
			'metaTitle' => '',
			'moduleId' => '',
			'modulePosition' => 'bottom',
			'parentPageId' => '',
			'position' => 1,
			'group' => self::GROUP_VISITOR,
			'targetBlank' => false,
			'title' => 'Accueil',
			'block' => '12',
			'barLeft' => '',
			'barRight' => '',
			'displayMenu' => 'none',
			'hideMenuSide' => false,
			'hideMenuChildren' =>false
			],
			'enfant' => [
					'typeMenu' => 'text',
						'iconUrl' => '',
						'disable' => false,
				'content' => '<p>Vous pouvez assigner des parents à vos pages afin de mieux organiser votre menu !</p>
								<div class="row">
								<div class="col4"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum, neque non vulputate hendrerit, arcu turpis dapibus nisl, id scelerisque metus lectus vitae nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat dolor et turpis finibus condimentum. Cras sit amet ligula sagittis justo.</p></div>
								<div class="col4"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum, neque non vulputate hendrerit, arcu turpis dapibus nisl, id scelerisque metus lectus vitae nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat dolor et turpis finibus condimentum. Cras sit amet ligula sagittis justo.</p></div>
								<div class="col4"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum, neque non vulputate hendrerit, arcu turpis dapibus nisl, id scelerisque metus lectus vitae nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat dolor et turpis finibus condimentum. Cras sit amet ligula sagittis justo.</p></div>
								</div>',
				'hideTitle' => false,
				'breadCrumb' => true,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'modulePosition' => 'bottom',
				'parentPageId' => 'accueil',
				'position' => 1,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Enfant',
				'block' => '12',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' =>  'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false	
			],
			'privee' => [
					'typeMenu' => 'text',
						'iconUrl' => '',
						'disable' => false,
				'content' => '<p>Cette page n\'est visible que des membres de votre site !</p>
								<div class="row">
									<div class="col6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum, neque non vulputate hendrerit, arcu turpis dapibus nisl, id scelerisque metus lectus vitae nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat dolor et turpis finibus condimentum. Cras sit amet ligula sagittis justo.</p></div>
									<div class="col6"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam interdum, neque non vulputate hendrerit, arcu turpis dapibus nisl, id scelerisque metus lectus vitae nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec feugiat dolor et turpis finibus condimentum. Cras sit amet ligula sagittis justo.</p></div>
								</div>',
				'hideTitle' => false,
				'breadCrumb' => true,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'parentPageId' => '',
				'modulePosition' => 'bottom',
				'position' => 2,
				'group' => self::GROUP_MEMBER,
				'targetBlank' => false,
				'title' => 'Privée',
				'block' => '12',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' =>  'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false
			],
			'mise-en-page' => [
				'typeMenu' => 'text',
						'iconUrl' => '',
						'disable' => false,
				'content' => '<p>Vous pouvez ajouter une ou deux barres latérales aux pages de votre site. Cette mise en page se définit dans les paramètres de page et peut s\'appliquer à l\'ensemble du site ou à certaines pages en particulier, au gré de vos désirs.</p>
								<p>Pour créer une barre latérale à partir d\'une "Nouvelle page" ou transformer une page existante en barre latérale, sélectionnez l\'option dans la liste des gabarits. On peut bien sûr définir autant de barres latérales qu\'on le souhaite.</p>
								<p>Cette nouvelle fonctionnalité autorise toutes sortes d\'utilisations : texte, encadrés, images, vidéos... ou simple marge blanche. Seule restriction : on ne peut pas installer un module dans une barre latérale.</p>
								<p>La liste des barres disponibles et leur emplacement s\'affichent en fonction du gabarit que vous aurez choisi.',
				'hideTitle' => false,
				'breadCrumb' => true,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'parentPageId' => 'accueil',
				'modulePosition' => 'bottom',
				'position' => 3,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Mise en page',
				'block' => '4-8',
				'barLeft' => 'barre',
				'barRight' => '',
				'displayMenu' =>  'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false
			],
			'menu-lateral' => [
				'typeMenu' => 'text',
						'iconUrl' => '',
						'disable' => false,
				'content' => '<p>Cette page illustre la possibilité d\'ajouter un menu dans les barres latérales.<br>
						Deux types de menus sont disponibles : l\'un reprenant les rubriques du menu principal comme celui-ci, l\'autre listant les pages d\'une même rubrique. Le choix du type de menu se fait dans la page de configuration d\'une barre latérale.</p>
						<p>Pour ajouter un menu à une page, choisissez une barre latérale avec menu dans la page de configuration. Les bulles d\'aide de la rubrique "Menu" expliquent comment masquer une page.</p>',
				'hideTitle' => false,
				'breadCrumb' => true,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'parentPageId' => 'accueil',
				'modulePosition' => 'bottom',
				'position' => 3,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Menu latéral',
				'block' => '9-3',
				'barLeft' => '',
				'barRight' => 'barrelateraleavecmenu',
				'displayMenu' =>  'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false
				],				
			'blog' => [
				'typeMenu' => 'text',
						'iconUrl' => '',
						'disable' => false,
				'content' => '<p>Cette page contient une instance du module de blog. Cliquez sur un article afin de le lire et de poster des commentaires.</p>',
				'hideTitle' => false,
				'breadCrumb' => false,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => 'blog',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 4,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Blog',
				'block' => '12',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' =>  'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false							
			],
			'galeries' => [
				'typeMenu' => 'text',
						'iconUrl' => '',
						'disable' => false,
				'content' => '<p>Cette page contient une instance du module de galeries photos. Cliquez sur la galerie ci-dessous afin de voir les photos qu\'elle contient.</p>',
				'hideTitle' => false,
				'breadCrumb' => false,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => 'gallery',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 5,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Galeries',
				'block' => '12',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' =>  'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false			
			],
			'site-de-zwii' => [
			'typeMenu' => 'text',
					'iconUrl' => '',
					'disable' => false,
			'content' => '',
			'hideTitle' => false,
			'breadCrumb' => false,				
			'metaDescription' => '',
			'metaTitle' => '',
			'moduleId' => 'redirection',
			'modulePosition' => 'bottom',
			'parentPageId' => '',
			'position' => 6,
			'group' => self::GROUP_VISITOR,
			'targetBlank' => true,
			'title' => 'Site de Zwii',
			'block' => '12',
			'barLeft' => '',
			'barRight' => '',
			'displayMenu' => 'none',
			'hideMenuSide' => false,
			'hideMenuChildren' =>false							
			],
			'contact' => [
				'typeMenu' => 'text',
				'iconUrl' => '',
				'disable' => false,
				'content' => '<p>Cette page contient un exemple de formulaire conçu à partir du module de génération de formulaires. Il est configuré pour envoyer les données saisies par mail aux administrateurs du site.</p>',
				'hideTitle' => false,
				'breadCrumb' => false,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => 'form',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 7,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Contact',
				'block' => '12',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' => 'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false						
			],
			'barre' => [
				'typeMenu' => 'text',
				'iconUrl' => '',
				'disable' => false,
				'content' => '<div class="block"><h4>ZwiiCMS</h4><h3>Le CMS sans base de données à l\'installation simple et rapide</h3></div>',
				'hideTitle' => false,
				'breadCrumb' => false,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 0 ,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Barre latérale',
				'block' => 'bar',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' => 'none',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false	
			],
			'barrelateraleavecmenu' => [
				'typeMenu' => 'text',
				'iconUrl' => '',
				'disable' => false,
				'content' => '<p>&nbsp;</p>',
				'hideTitle' => false,
				'breadCrumb' => false,				
				'metaDescription' => '',
				'metaTitle' => '',
				'moduleId' => '',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 0 ,
				'group' => self::GROUP_VISITOR,
				'targetBlank' => false,
				'title' => 'Barre latérale avec menu',
				'block' => 'bar',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' => 'parents',
				'hideMenuSide' => false,
				'hideMenuChildren' =>false			
			],
			'mentions-legales' => [
				'typeMenu' => 'text',
				'iconUrl' => '',
				'disable' => false,
				'content' => '<h1 center="" style="text-align: center;">Conditions g&eacute;n&eacute;rales d\'utilisation</h1><h1 center="" style="text-align: center;">En vigueur au 01/01/2020</h1><p>&nbsp;</p><p style=\"text-align: justify;\">Les pr&eacute;sentes conditions g&eacute;n&eacute;rales d\'utilisation (dites &laquo; CGU &raquo;) ont pour objet l\'encadrement juridique des modalit&eacute;s de mise &agrave; disposition du site et des services par et de d&eacute;finir les conditions d&rsquo;acc&egrave;s et d&rsquo;utilisation des services par &laquo; l\'Utilisateur &raquo;.</p><p style=\"text-align: justify;\">Les pr&eacute;sentes CGU sont accessibles sur le site &agrave; la rubrique &laquo;CGU&raquo;.</p><p style=\"text-align: justify;\">Toute inscription ou utilisation du site implique l\'acceptation sans aucune r&eacute;serve ni restriction des pr&eacute;sentes CGU par l&rsquo;utilisateur. Lors de l\'inscription sur le site via le Formulaire d&rsquo;inscription, chaque utilisateur accepte express&eacute;ment les pr&eacute;sentes CGU en cochant la case pr&eacute;c&eacute;dant le texte suivant : &laquo; Je reconnais avoir lu et compris les CGU et je les accepte &raquo;.</p><p style=\"text-align: justify;\">En cas de non-acceptation des CGU stipul&eacute;es dans le pr&eacute;sent contrat, l\'Utilisateur se doit de renoncer &agrave; l\'acc&egrave;s des services propos&eacute;s par le site.</p><p style=\"text-align: justify;\">www.site.com se r&eacute;serve le droit de modifier unilat&eacute;ralement et &agrave; tout moment le contenu des pr&eacute;sentes CGU.</p><h2>Article 1 : Les mentions l&eacute;gales</h2><p style=\"text-align: justify;\">L&rsquo;&eacute;dition et la direction de la publication du site www.site.com est assur&eacute;e par John Doe, domicili&eacute; 1 rue de Paris - 75016 PARIS.</p><p style=\"text-align: justify;\">Num&eacute;ro de t&eacute;l&eacute;phone est 0102030405</p><p style=\"text-align: justify;\">Adresse e-mail john.doe@zwiicms.com.</p><p style=\"text-align: justify;\">L\'h&eacute;bergeur du site www.site.com est la soci&eacute;t&eacute; Nom de l\'h&eacute;bergeur, dont le si&egrave;ge social est situ&eacute; au 12 rue de Lyon - 69001 Lyon, avec le num&eacute;ro de t&eacute;l&eacute;phone : 0401020305.</p><h2>ARTICLE 2&nbsp;: Acc&egrave;s au site</h2><p style=\"text-align: justify;\">Le site www.site.com permet &agrave; l\'Utilisateur un acc&egrave;s gratuit aux services suivants :</p><p style=\"text-align: justify;\">Le site internet propose les services suivants :</p><p style=\"text-align: justify;\">Publication</p><p style=\"text-align: justify;\">Le site est accessible gratuitement en tout lieu &agrave; tout Utilisateur ayant un acc&egrave;s &agrave; Internet. Tous les frais support&eacute;s par l\'Utilisateur pour acc&eacute;der au service (mat&eacute;riel informatique, logiciels, connexion Internet, etc.) sont &agrave; sa charge.</p><p style=\"text-align: justify;\">L&rsquo;Utilisateur non membre n\'a pas acc&egrave;s aux services r&eacute;serv&eacute;s. Pour cela, il doit s&rsquo;inscrire en remplissant le formulaire. En acceptant de s&rsquo;inscrire aux services r&eacute;serv&eacute;s, l&rsquo;Utilisateur membre s&rsquo;engage &agrave; fournir des informations sinc&egrave;res et exactes concernant son &eacute;tat civil et ses coordonn&eacute;es, notamment son adresse email.</p><p style=\"text-align: justify;\">Pour acc&eacute;der aux services, l&rsquo;Utilisateur doit ensuite s\'identifier &agrave; l\'aide de son identifiant et de son mot de passe qui lui seront communiqu&eacute;s apr&egrave;s son inscription.</p><p style=\"text-align: justify;\">Tout Utilisateur membre r&eacute;guli&egrave;rement inscrit pourra &eacute;galement solliciter sa d&eacute;sinscription en se rendant &agrave; la page d&eacute;di&eacute;e sur son espace personnel. Celle-ci sera effective dans un d&eacute;lai raisonnable.</p><p style=\"text-align: justify;\">Tout &eacute;v&eacute;nement d&ucirc; &agrave; un cas de force majeure ayant pour cons&eacute;quence un dysfonctionnement du site ou serveur et sous r&eacute;serve de toute interruption ou modification en cas de maintenance, n\'engage pas la responsabilit&eacute; de www.site.com. Dans ces cas, l&rsquo;Utilisateur accepte ainsi ne pas tenir rigueur &agrave; l&rsquo;&eacute;diteur de toute interruption ou suspension de service, m&ecirc;me sans pr&eacute;avis.</p><p style=\"text-align: justify;\">L\'Utilisateur a la possibilit&eacute; de contacter le site par messagerie &eacute;lectronique &agrave; l&rsquo;adresse email de l&rsquo;&eacute;diteur communiqu&eacute; &agrave; l&rsquo;ARTICLE 1.</p><h2>ARTICLE 3 : Collecte des donn&eacute;es</h2><p style=\"text-align: justify;\">Le site est exempt&eacute; de d&eacute;claration &agrave; la Commission Nationale Informatique et Libert&eacute;s (CNIL) dans la mesure o&ugrave; il ne collecte aucune donn&eacute;e concernant les Utilisateurs.</p><h2>ARTICLE 4&nbsp;: Propri&eacute;t&eacute; intellectuelle</h2><p>Les marques, logos, signes ainsi que tous les contenus du site (textes, images, son&hellip;) font l\'objet d\'une protection par le Code de la propri&eacute;t&eacute; intellectuelle et plus particuli&egrave;rement par le droit d\'auteur.</p><p>L\'Utilisateur doit solliciter l\'autorisation pr&eacute;alable du site pour toute reproduction, publication, copie des diff&eacute;rents contenus. Il s\'engage &agrave; une utilisation des contenus du site dans un cadre strictement priv&eacute;, toute utilisation &agrave; des fins commerciales et publicitaires est strictement interdite.</p><p>Toute repr&eacute;sentation totale ou partielle de ce site par quelque proc&eacute;d&eacute; que ce soit, sans l&rsquo;autorisation expresse de l&rsquo;exploitant du site Internet constituerait une contrefa&ccedil;on sanctionn&eacute;e par l&rsquo;article L 335-2 et suivants du Code de la propri&eacute;t&eacute; intellectuelle.</p><p>Il est rappel&eacute; conform&eacute;ment &agrave; l&rsquo;article L122-5 du Code de propri&eacute;t&eacute; intellectuelle que l&rsquo;Utilisateur qui reproduit, copie ou publie le contenu prot&eacute;g&eacute; doit citer l&rsquo;auteur et sa source.</p><h2>ARTICLE 5&nbsp;: Responsabilit&eacute;</h2><p style=\"text-align: justify;\">Les sources des informations diffus&eacute;es sur le site www.site.com sont r&eacute;put&eacute;es fiables mais le site ne garantit pas qu&rsquo;il soit exempt de d&eacute;fauts, d&rsquo;erreurs ou d&rsquo;omissions.</p><p style=\"text-align: justify;\">Les informations communiqu&eacute;es sont pr&eacute;sent&eacute;es &agrave; titre indicatif et g&eacute;n&eacute;ral sans valeur contractuelle. Malgr&eacute; des mises &agrave; jour r&eacute;guli&egrave;res, le site www.site.com&nbsp;ne peut &ecirc;tre tenu responsable de la modification des dispositions administratives et juridiques survenant apr&egrave;s la publication. De m&ecirc;me, le site ne peut &ecirc;tre tenue responsable de l&rsquo;utilisation et de l&rsquo;interpr&eacute;tation de l&rsquo;information contenue dans ce site.</p><p style=\"text-align: justify;\">L\'Utilisateur s\'assure de garder son mot de passe secret. Toute divulgation du mot de passe, quelle que soit sa forme, est interdite. Il assume les risques li&eacute;s &agrave; l\'utilisation de son identifiant et mot de passe. Le site d&eacute;cline toute responsabilit&eacute;.</p><p style=\"text-align: justify;\">Le site www.site.com&nbsp;ne peut &ecirc;tre tenu pour responsable d&rsquo;&eacute;ventuels virus qui pourraient infecter l&rsquo;ordinateur ou tout mat&eacute;riel informatique de l&rsquo;Internaute, suite &agrave; une utilisation, &agrave; l&rsquo;acc&egrave;s, ou au t&eacute;l&eacute;chargement provenant de ce site.</p><p style=\"text-align: justify;\">La responsabilit&eacute; du site ne peut &ecirc;tre engag&eacute;e en cas de force majeure ou du fait impr&eacute;visible et insurmontable d\'un tiers.</p><h2>ARTICLE 6&nbsp;: Liens hypertextes</h2><p style=\"text-align: justify;\">Des liens hypertextes peuvent &ecirc;tre pr&eacute;sents sur le site. L&rsquo;Utilisateur est inform&eacute; qu&rsquo;en cliquant sur ces liens, il sortira du site www.site.com. Ce dernier n&rsquo;a pas de contr&ocirc;le sur les pages web sur lesquelles aboutissent ces liens et ne saurait, en aucun cas, &ecirc;tre responsable de leur contenu.</p><h2>ARTICLE 7 : Cookies</h2><p style=\"text-align: justify;\">L&rsquo;Utilisateur est inform&eacute; que lors de ses visites sur le site, un cookie peut s&rsquo;installer automatiquement sur son logiciel de navigation.</p><p style=\"text-align: justify;\">Les cookies sont de petits fichiers stock&eacute;s temporairement sur le disque dur de l&rsquo;ordinateur de l&rsquo;Utilisateur par votre navigateur et qui sont n&eacute;cessaires &agrave; l&rsquo;utilisation du site www.site.com. Les cookies ne contiennent pas d&rsquo;information personnelle et ne peuvent pas &ecirc;tre utilis&eacute;s pour identifier quelqu&rsquo;un. Un cookie contient un identifiant unique, g&eacute;n&eacute;r&eacute; al&eacute;atoirement et donc anonyme. Certains cookies expirent &agrave; la fin de la visite de l&rsquo;Utilisateur, d&rsquo;autres restent.</p><p style=\"text-align: justify;\">L&rsquo;information contenue dans les cookies est utilis&eacute;e pour am&eacute;liorer le site www.site.com.</p><p style=\"text-align: justify;\">En naviguant sur le site, L&rsquo;Utilisateur les accepte.</p><p style=\"text-align: justify;\">L&rsquo;Utilisateur doit toutefois donner son consentement quant &agrave; l&rsquo;utilisation de certains cookies.</p><p style=\"text-align: justify;\">A d&eacute;faut d&rsquo;acceptation, l&rsquo;Utilisateur est inform&eacute; que certaines fonctionnalit&eacute;s ou pages risquent de lui &ecirc;tre refus&eacute;es.</p><p style=\"text-align: justify;\">L&rsquo;Utilisateur pourra d&eacute;sactiver ces cookies par l&rsquo;interm&eacute;diaire des param&egrave;tres figurant au sein de son logiciel de navigation.</p><h2>ARTICLE 8&nbsp;: Droit applicable et juridiction comp&eacute;tente</h2><p style=\"text-align: justify;\">La l&eacute;gislation fran&ccedil;aise s\'applique au pr&eacute;sent contrat. En cas d\'absence de r&eacute;solution amiable d\'un litige n&eacute; entre les parties, les tribunaux fran&ccedil;ais seront seuls comp&eacute;tents pour en conna&icirc;tre.</p><p style=\"text-align: justify;\">Pour toute question relative &agrave; l&rsquo;application des pr&eacute;sentes CGU, vous pouvez joindre l&rsquo;&eacute;diteur aux coordonn&eacute;es inscrites &agrave; l&rsquo;ARTICLE 1.</p><p style=\"text-align: justify;\">R&eacute;alis&eacute; sur <a href=\"https://www.legalplace.fr\" target=\"_blank\" rel=\"noopener\">https://www.legalplace.fr</a></p>',
				'hideTitle' => true,
				'breadCrumb' => false,
				'metaDescription' => '',
				'metaTitle' => 'Mentions Légales',
				'moduleId' => '',
				'modulePosition' => 'bottom',
				'parentPageId' => '',
				'position' => 0,
				'group' => 0,
				'targetBlank' => false,
				'targetLity' => false,
				'title' => 'Mentions légales',
				'block' => '12',
				'barLeft' => '',
				'barRight' => '',
				'displayMenu' => 'none',
				'hideMenuSide' => false,
				'hideMenuHead' => false,
				'hideMenuChildren' => false
			],
		],
		'module' => [
			'blog' => [
				'mon-premier-article' => [
					'closeComment' => false,
					'comment' => [
						'58e11d09e5aff' => [
							'author' => 'Rémi',
							'content' => 'Article bien rédigé et très pertinent, bravo !',
							'createdOn' => 1421748000,
							'userId' => ''
						]
					],
					'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In a placerat metus. Morbi luctus laoreet dolor et euismod. Phasellus eget eros ac eros pretium tincidunt. Sed maximus magna lectus, non vestibulum sapien pretium maximus. Donec convallis leo tortor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras convallis lacus eu risus gravida varius. Etiam mattis massa vitae eros placerat bibendum.</p><p>Vivamus tempus magna augue, in bibendum quam blandit at. Morbi felis tortor, suscipit ut ipsum ut, volutpat consectetur orci. Nulla tincidunt quis ligula non viverra. Sed pretium dictum blandit. Donec fringilla, nunc at dictum pretium, arcu massa viverra leo, et porta turpis ipsum eget risus. Quisque quis maximus purus, in elementum arcu. Donec nisi orci, aliquam non luctus non, congue volutpat massa. Curabitur sed risus congue, porta arcu vel, tincidunt nisi. Duis tincidunt quam ut velit maximus ornare. Nullam sagittis, ante quis pharetra hendrerit, lorem massa dapibus mi, a hendrerit dolor odio nec augue. Nunc sem nisl, tincidunt vitae nunc et, viverra tristique diam. In eget dignissim lectus. Nullam volutpat lacus id ex dapibus viverra. Pellentesque ultricies lorem ut nunc elementum volutpat. Cras id ultrices justo.</p><p>Phasellus nec erat leo. Praesent at sem nunc. Vestibulum quis condimentum turpis. Cras semper diam vitae enim fringilla, ut fringilla mauris efficitur. In nec porttitor urna. Nam eros leo, vehicula eget lobortis sed, gravida id mauris. Nulla bibendum nunc tortor, non bibendum justo consectetur vel. Phasellus nec risus diam. In commodo tellus nec nulla fringilla, nec feugiat nunc consectetur. Etiam non eros sodales, sodales lacus vel, finibus leo. Quisque hendrerit tristique congue. Phasellus nec augue vitae libero elementum facilisis. Mauris pretium ornare nisi, non scelerisque velit consectetur sit amet.</p>',
					'picture' => 'galerie/landscape/meadow.jpg',
					'hidePicture' => false,					
					'publishedOn' => 1548790902,
					'state' => true,
					'title' => 'Mon premier article',
					'userId' => '' // Géré au moment de l'installation
				],
				'mon-deuxieme-article' => [
					'closeComment' => false,
					'comment' => [],
					'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam lobortis eros pharetra metus rutrum pretium et sagittis mauris. Donec commodo venenatis sem nec suscipit. In tempor sollicitudin scelerisque. Etiam quis nibh eleifend, congue nisl quis, ultricies ipsum. Integer at est a eros vulputate pellentesque eu vitae tellus. Nullam suscipit quam nisl. Vivamus dui odio, luctus ac fringilla ultrices, eleifend vel sapien. Integer sem ex, lobortis eu mattis eu, condimentum non libero. Aliquam non porttitor elit, eu hendrerit neque. Praesent tortor urna, tincidunt sed dictum id, rutrum tempus sapien.</p><p>Donec accumsan ante ac odio laoreet porttitor. Pellentesque et leo a leo scelerisque mattis id vel elit. Quisque egestas congue enim nec semper. Morbi mollis nibh sapien. Nunc quis fringilla lorem. Donec vel venenatis nunc. Donec lectus velit, tempor sit amet dui sed, consequat commodo enim. Nam porttitor neque semper, dapibus nunc bibendum, lobortis urna. Morbi ullamcorper molestie lectus a elementum. Curabitur eu cursus orci, sed tristique justo. In massa lacus, imperdiet eu elit quis, consectetur maximus magna. Integer suscipit varius ante vitae egestas. Morbi scelerisque fermentum ipsum, euismod faucibus mi tincidunt id. Sed at consectetur velit. Ut fermentum nunc nibh, at commodo felis lacinia nec.</p><p>Nullam a justo quis lectus facilisis semper eget quis sem. Morbi suscipit erat sem, non fermentum nunc luctus vel. Proin venenatis quam ut arcu luctus efficitur. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sollicitudin tristique nunc nec convallis. Maecenas id tortor semper, tempus nisl laoreet, cursus lacus. Aliquam sagittis est in leo congue, a pharetra felis aliquet. Nulla gravida lobortis sapien, quis viverra enim ullamcorper sed. Donec ultrices sem eu volutpat dapibus. Nam euismod, tellus eu congue mollis, massa nisi finibus odio, vitae porta arcu urna ac lorem. Sed faucibus dignissim pretium. Pellentesque eget ante tellus. Pellentesque a elementum odio, sit amet vulputate diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In hendrerit consequat dolor, malesuada pellentesque tellus molestie non. Aenean quis purus a lectus pellentesque laoreet.</p>',
					'picture' => 'galerie/landscape/desert.jpg',
					'hidePicture' => false,					
					'publishedOn' => 1550432502,
					'state' => true,
					'title' => 'Mon deuxième article',
					'userId' => '' // Géré au moment de l'installation
				],
				'mon-troisieme-article' => [
					'closeComment' => true,
					'comment' => [],
					'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut tempus nibh. Cras eget iaculis justo, ac laoreet lacus. Nunc tellus nulla, auctor id hendrerit eu, pellentesque in sapien. In hac habitasse platea dictumst. Aliquam leo urna, hendrerit id nunc eget, finibus maximus dolor. Sed rutrum sapien consectetur, tincidunt nulla at, blandit quam. Duis ex enim, vehicula vel nisi vitae, lobortis volutpat nisl. Vivamus enim libero, euismod nec risus vel, interdum placerat elit. In cursus sapien condimentum dui imperdiet, sed lobortis ante consectetur. Maecenas hendrerit eget felis non consequat.</p><p>Nullam nec risus non velit efficitur tempus eget tincidunt mauris. Etiam venenatis leo id justo sagittis, commodo dignissim sapien tristique. Vivamus finibus augue malesuada sapien gravida rutrum. Integer mattis lectus ac pulvinar scelerisque. Integer suscipit feugiat metus, ac molestie odio suscipit eget. Fusce at elit in tellus venenatis finibus id sit amet magna. Integer sodales luctus neque blandit posuere. Cras pellentesque dictum lorem eget vestibulum. Quisque vitae metus non nisi efficitur rhoncus ut vitae ipsum. Donec accumsan massa at est faucibus lacinia. Quisque imperdiet luctus neque eu vestibulum. Phasellus pellentesque felis ligula, id imperdiet elit ultrices eu.</p>',
					'picture' => 'galerie/landscape/iceberg.jpg',
					'hidePicture' => false,					
					'publishedOn' => 1550864502,
					'state' => true,
					'title' => 'Mon troisième article',
					'userId' => '' // Géré au moment de l'installation
				]
			],
			'galeries' => [
				'beaux-paysages' => [
					'config' => [
						'name' => 'Beaux paysages',
						'directory' => self::FILE_DIR.'source/galerie/landscape'
					],
					'legend' => [
						'desert.jpg' => 'Un désert',
						'iceberg.jpg' => 'Un iceberg',
						'meadow.jpg' => 'Une prairie'
					]
				],
				'espace' => [
					'config' => [
						'name' => 'Espace',
						'directory' => self::FILE_DIR.'source/galerie/space'
					],
					'legend' => [
						'earth.jpg' => 'La Terre et la Lune',
						'cosmos.jpg' => 'Le cosmos',
						'nebula.jpg' => 'Une nébuleuse'
					]
				]
			],
			'site-de-zwii' => [
				'url' => 'https://zwiicms.com/',
				'count' => 0
			],
			'contact' => [
				'config' => [
					'button' => '',
					'capcha' => true,
					'group' => self::GROUP_ADMIN,
					'pageId' => '',
					'subject' => ''
				],
				'data' => [],
				'input' => [
					[
						'name' => 'Adresse mail',
						'position' => 1,
						'required' => true,
						'type' => 'mail',
						'values' => ''
					],
					[
						'name' => 'Sujet',
						'position' => 2,
						'required' => true,
						'type' => 'text',
						'values' => ''
					],
					[
						'name' => 'Message',
						'position' => 3,
						'required' => true,
						'type' => 'textarea',
						'values' => ''
					]
				]
			]
		],
		'user' => [],
		'theme' =>  [
			'body' => [
				'backgroundColor' => 'rgba(236, 239, 241, 1)',
				'image' => '',
				'imageAttachment' => 'scroll',
				'imageRepeat' => 'no-repeat',
				'imagePosition' => 'top center',
				'imageSize' => 'auto'
			],
			'button' => [
				'backgroundColor' => 'rgba(32, 59, 82, 1)'
			],
			'footer' => [
				'backgroundColor' => 'rgba(255, 255, 255, 1)',
				'font' => 'Open+Sans',				
				'fontSize' => '.8em',
				'fontWeight' => 'normal',				
				'height' => '5px',
				'loginLink' => true,
				'margin' => true,
				'position' => 'site',
				'textColor' => 'rgba(33, 34, 35, 1)',
				'copyrightPosition' => 'right',
				'copyrightAlign' => 'right',
				'text' => '<p>Pied de page personnalisé</p>',
				'textPosition' => 'left',
				'textAlign' => 'left',	
				'textTransform' => 'none',							
				'socialsPosition' => 'center',
				'socialsAlign' => 'center',
				'displayVersion' => true,
				'displaySiteMap' => true,
				'displayCopyright' => false,
				'displayLegal' => true,
				'displaySearch' => false,
				'template' => '3'
			],
			'header' => [
				'backgroundColor' => 'rgba(255, 255, 255, 1)',
				'font' => 'Oswald',
				'fontSize' => '2em',
				'fontWeight' => 'normal',
				'height' => '150px',
				'image' => 'banniere/zwii_banniere-960px.jpg',
				'imagePosition' => 'center center',
				'imageRepeat' => 'no-repeat',
				'margin' => false,
				'position' => 'site',
				'textAlign' => 'center',
				'textColor' => 'rgba(33, 34, 35, 1)',
				'textHide' => true,
				'textTransform' => 'none',
				'linkHomePage' => true,
				'imageContainer' => 'auto'
			],
			'link' => [
				'textColor' => 'rgba(74, 105, 189, 1)'
			],
			'menu' => [
				'backgroundColor' => 'rgba(32, 59, 82, 1)',
				'font' => 'Open+Sans',				
				'fontSize' => '1em',
				'fontWeight' => 'normal',
				'height' => '15px 10px',
				'loginLink' => false,
				'burgerTitle' => true,
				'margin' => false,
				'position' => 'site-second',
				'textAlign' => 'left',
				'textColor' => 'rgba(255, 255, 255, 1)',
				'textTransform' => 'none',
				'fixed' => false,
				'activeColor' => 'rgba(255, 255, 255, 1)',
				'activeColorAuto' => true,

			],
			'site' => [
				'backgroundColor' => 'rgba(255, 255, 255, 1)',
				'radius' => '0',
				'shadow' => '0',
				'width' => '960px'
			],
			'text' => [
				'font' => 'Open+Sans',
				'fontSize' => '13px',
				'textColor' => 'rgba(33, 34, 35, 1)'
			],
			'title' => [
				'font' => 'Oswald',
				'fontWeight' => 'normal',
				'textColor' => 'rgba(74, 105, 189, 1)',
				'textTransform' => 'none'
			],
			'version' => 0,
		]
    ];
}
