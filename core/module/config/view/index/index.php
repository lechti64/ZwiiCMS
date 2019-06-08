<?php echo template::formOpen('configForm'); ?>
	<div class="row">
		<div class="col2">
			<?php echo template::button('configBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl(false),
				'ico' => 'home',
				'value' => 'Accueil'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('configSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Informations générales</h4>
				<div class="row">
					<div class="col4">
						<?php echo template::select('configHomePageId', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
							'label' => 'Page d\'accueil',
							'selected' => $this->getData(['config', 'homePageId'])
						]); ?>
					</div>
					<div class="col8">
						<?php echo template::text('configTitle', [
							'label' => 'Titre du site',
							'value' => $this->getData(['config', 'title']),
							'help'  => 'Il apparaît dans la barre de titre et les partages sur les réseaux sociaux.'
						]); ?>
					</div>						
				</div>
				<?php echo template::textarea('configMetaDescription', [
					'label' => 'Description du site',
					'value' => $this->getData(['config', 'metaDescription']),
					'help'  => 'Elle apparaît dans les partages sur les réseaux sociaux.'
				]); ?>
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col5">
			<div class="block">
				<h4>Options</h4>
					<div class="row">
						<div class="col6">
							<?php echo template::file('configFavicon', [
								'type' => 1,
								'help' => 'Pensez à supprimer le cache de votre navigateur si la favicon ne change pas.',
								'label' => 'Favicon',
								'value' => $this->getData(['config', 'favicon'])
							]); ?>
						</div>
						<div class="col6">
							<?php echo template::select('itemsperPage', $module::$ItemsList, [
							'label' => 'Articles par page',
							'selected' => $this->getData(['config', 'itemsperPage']),
							'help' => 'Modules Blog et News'
							]); ?>
						</div>
					</div>
					<?php echo template::checkbox('configCookieConsent', true, 'Message de consentement pour l\'utilisation des cookies', [
						'checked' => $this->getData(['config', 'cookieConsent'])
					]); ?>					
					<?php echo template::checkbox('rewrite', true, 'Réécriture d\'URL', [
						'checked' => helper::checkRewrite(),
						'help' => 'Vérifiez d\'abord que votre serveur l\'autorise : ce n\'est pas le cas chez Free.'
					]); ?>			

			</div>							
		</div>
		<div class="col7">
			<div class="block">
				<h4>Réseaux sociaux</h4>
				<div class="row">
					<div class="col4">
						<?php echo template::text('configSocialFacebookId', [
							'help' => 'Saisissez votre ID : https://www.facebook.com/[ID].',
							'label' => 'Facebook',
							'value' => $this->getData(['config', 'social', 'facebookId'])
						]); ?>
					</div>
					<div class="col4">					
						<?php echo template::text('configSocialInstagramId', [
							'help' => 'Saisissez votre ID : https://www.instagram.com/[ID].',
							'label' => 'Instagram',
							'value' => $this->getData(['config', 'social', 'instagramId'])
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::text('configSocialYoutubeId', [
							'help' => 'Saisissez votre ID : https://www.youtube.com/channel/[ID].',
							'label' => 'Youtube',
							'value' => $this->getData(['config', 'social', 'youtubeId'])
						]); ?>
					</div>					
				</div>
				<div class="row">
					<div class="col4">
						<?php echo template::text('configSocialTwitterId', [
							'help' => 'Saisissez votre ID : https://twitter.com/[ID].',
							'label' => 'Twitter',
							'value' => $this->getData(['config', 'social', 'twitterId'])
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::text('configSocialPinterestId', [
									'help' => 'Saisissez votre ID : https://pinterest.com/[ID].',
							'label' => 'Pinterest',
							'value' => $this->getData(['config', 'social', 'pinterestId'])
						]); ?>
					</div>					
					<div class="col4">
							<?php echo template::text('configSocialLinkedinId', [
								'help' => 'Saisissez votre ID Linkedin : https://fr.linkedin.com/in/[CETTE PARTIE].',
								'label' => 'Linkedin',
								'value' => $this->getData(['config', 'social', 'linkedinId'])
							]); ?>
					</div>						
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col6">
			<div class="block">
				<h4>Système et sauvegardes</h4>							
				<div class="col12">
					<div class="row">
						<?php echo template::select('configTimezone', $module::$timezones, [
							'label' => 'Fuseau horaire',
							'selected' => $this->getData(['config', 'timezone'])
						]); ?>	
					</div>
					<div class="row">
						<?php echo template::checkbox('configMaintenance', true, 'Site en maintenance', [
							'checked' => $this->getData(['config', 'maintenance'])
						]); ?>	
						<?php echo template::checkbox('configAutoBackup', true, 'Sauvegarde automatique', [
							'checked' => $this->getData(['config', 'autoBackup']),
							'help' => 'Le fichier de données est copié quotidiennement dans le dossier \'site/backup\'. La sauvegarde est conservée pendant 30 jours.'
						]); ?>
					</div>
				</div>
				<div class="row">
					<div class="col10 offset1">
						<?php echo template::button('configExport', [
							'href' => helper::baseUrl() . 'config/backup',
							'value' => 'Exporter une copie du site<br>(données, thème et fichiers)'
						]); ?>
					</div>
				</div>
				<div class="row">
					<div class="col10 offset1">
						<?php echo template::button('configSiteMap', [
							'href' => helper::baseUrl() . 'config/generateFiles',
							'value' => 'Générer sitemap.xml et robots.txt'
						]); ?>
					</div>
				</div>
			</div>				
		</div>
		<div class="col6">
			<div class="block">
				<h4>Aide au référencement</h4>
				<div class="row">				
					<div class="col10 offset1">		
						<?php echo template::button('configMetaImage', [
						'href' => helper::baseUrl() . 'config/configMetaImage',
						'value' => 'Rafraîchir la capture d\'écran'
						]); ?>
					</div>
				</div>	
				<p>Cette capture d'écran est nécessaire aux partages sur les réseaux sociaux. Elle est régénérée lorsque le fichier "screenshot.png" est effacé du gestionnaire de fichiers.</p>
				<div class="row">
					<div class="col8 offset2">
						<img src='<?php echo helper::baseUrl(false) . self::FILE_DIR.'source/screenshot.png';?>' />
				</div>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<?php 							
			// Lire le contenu des fichiers de script
			$headerFile = "";			
			if (file_exists( self::DATA_DIR . 'head.inc.html')) {
				$headerFile = file_get_contents (self::DATA_DIR . 'head.inc.html');
			}
			$bodyFile = "";
			if (file_exists( self::DATA_DIR . 'body.inc.html')) {
				$bodyFile = file_get_contents (self::DATA_DIR . 'body.inc.html');
			}
			?>
			<div class="block">
				<h4>Options avancées</h4>
				<div class="row">
					<div class="col6">
						<?php echo template::text('configAnalyticsId', [
							'help' => 'Saisissez l\'ID de suivi.',
							'label' => 'Google Analytics',
							'placeholder' => 'UA-XXXXXXXX-X',
							'value' => $this->getData(['config', 'analyticsId'])
						]); ?>
					</div>
				</div>	
				<div class="row">
					<div class="col6">
						<?php echo template::textarea('configScriptHead', [
							'label' => 'Script dans Head',
							'value' => $headerFile
						]); ?>
					</div>
					<div class="col6">
						<?php echo template::textarea('configScriptBody', [
							'label' => 'Script dans Body',
							'value' => $bodyFile
						]); ?>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Numéros de version</h4>
				<div class="row">
					<div  class="col2">
						<?php echo template::text('configVersion', [
						'label' => 'ZwiiCMS',
						'readonly' => true,
						'value' => common::ZWII_VERSION
					]); ?>	
					</div>	
					<div  class="col2">
						<?php echo template::text('moduleRedirectionVersion', [
							'label' => 'Redirection',
							'readonly' => true,
							'value' => redirection::REDIRECTION_VERSION
						]); ?>
					</div>
					<div  class="col2">
						<?php echo template::text('moduleFormVersion', [
							'label' => 'Form',
							'readonly' => true,
							'value' => form::FORM_VERSION
						]); ?>
					</div>
					<div  class="col2">
						<?php echo template::text('moduleGalleryVersion', [
							'label' => 'Gallery',
							'readonly' => true,
							'value' => gallery::GALLERY_VERSION
						]); ?>
					</div>
					<div  class="col2">
						<?php echo template::text('moduleNewsVersion', [
							'label' => 'News',
							'readonly' => true,
							'value' => news::NEWS_VERSION
						]); ?>
					</div>
					<div  class="col2">
						<?php echo template::text('moduleBlogVersion', [
							'label' => 'Blog',
							'readonly' => true,
							'value' => blog::BLOG_VERSION
						]); ?>
					</div>										
				</div>	
			</div>
		</div>
	</div>
<?php echo template::formClose(); ?>