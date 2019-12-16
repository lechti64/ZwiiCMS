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

class config extends common {

	public static $actions = [
		'backup' => self::GROUP_ADMIN,
		'configMetaImage' => self::GROUP_ADMIN,
		'generateFiles' => self::GROUP_ADMIN,
		'updateRobots' => self::GROUP_ADMIN,
		'index' => self::GROUP_ADMIN
	];
	
	public static $timezones = [
		'Pacific/Midway'		=> '(GMT-11:00) Midway Island',
		'US/Samoa'				=> '(GMT-11:00) Samoa',
		'US/Hawaii'				=> '(GMT-10:00) Hawaii',
		'US/Alaska'				=> '(GMT-09:00) Alaska',
		'US/Pacific'			=> '(GMT-08:00) Pacific Time (US &amp; Canada)',
		'America/Tijuana'		=> '(GMT-08:00) Tijuana',
		'US/Arizona'			=> '(GMT-07:00) Arizona',
		'US/Mountain'			=> '(GMT-07:00) Mountain Time (US &amp; Canada)',
		'America/Chihuahua'		=> '(GMT-07:00) Chihuahua',
		'America/Mazatlan'		=> '(GMT-07:00) Mazatlan',
		'America/Mexico_City'	=> '(GMT-06:00) Mexico City',
		'America/Monterrey'		=> '(GMT-06:00) Monterrey',
		'Canada/Saskatchewan'	=> '(GMT-06:00) Saskatchewan',
		'US/Central'			=> '(GMT-06:00) Central Time (US &amp; Canada)',
		'US/Eastern'			=> '(GMT-05:00) Eastern Time (US &amp; Canada)',
		'US/East-Indiana'		=> '(GMT-05:00) Indiana (East)',
		'America/Bogota'		=> '(GMT-05:00) Bogota',
		'America/Lima'			=> '(GMT-05:00) Lima',
		'America/Caracas'		=> '(GMT-04:30) Caracas',
		'Canada/Atlantic'		=> '(GMT-04:00) Atlantic Time (Canada)',
		'America/La_Paz'		=> '(GMT-04:00) La Paz',
		'America/Santiago'		=> '(GMT-04:00) Santiago',
		'Canada/Newfoundland'	=> '(GMT-03:30) Newfoundland',
		'America/Buenos_Aires'	=> '(GMT-03:00) Buenos Aires',
		'Greenland'				=> '(GMT-03:00) Greenland',
		'Atlantic/Stanley'		=> '(GMT-02:00) Stanley',
		'Atlantic/Azores'		=> '(GMT-01:00) Azores',
		'Atlantic/Cape_Verde'	=> '(GMT-01:00) Cape Verde Is.',
		'Africa/Casablanca'		=> '(GMT) Casablanca',
		'Europe/Dublin'			=> '(GMT) Dublin',
		'Europe/Lisbon'			=> '(GMT) Lisbon',
		'Europe/London'			=> '(GMT) London',
		'Africa/Monrovia'		=> '(GMT) Monrovia',
		'Europe/Amsterdam'		=> '(GMT+01:00) Amsterdam',
		'Europe/Belgrade'		=> '(GMT+01:00) Belgrade',
		'Europe/Berlin'			=> '(GMT+01:00) Berlin',
		'Europe/Bratislava'		=> '(GMT+01:00) Bratislava',
		'Europe/Brussels'		=> '(GMT+01:00) Brussels',
		'Europe/Budapest'		=> '(GMT+01:00) Budapest',
		'Europe/Copenhagen'		=> '(GMT+01:00) Copenhagen',
		'Europe/Ljubljana'		=> '(GMT+01:00) Ljubljana',
		'Europe/Madrid'			=> '(GMT+01:00) Madrid',
		'Europe/Paris'			=> '(GMT+01:00) Paris',
		'Europe/Prague'			=> '(GMT+01:00) Prague',
		'Europe/Rome'			=> '(GMT+01:00) Rome',
		'Europe/Sarajevo'		=> '(GMT+01:00) Sarajevo',
		'Europe/Skopje'			=> '(GMT+01:00) Skopje',
		'Europe/Stockholm'		=> '(GMT+01:00) Stockholm',
		'Europe/Vienna'			=> '(GMT+01:00) Vienna',
		'Europe/Warsaw'			=> '(GMT+01:00) Warsaw',
		'Europe/Zagreb'			=> '(GMT+01:00) Zagreb',
		'Europe/Athens'			=> '(GMT+02:00) Athens',
		'Europe/Bucharest'		=> '(GMT+02:00) Bucharest',
		'Africa/Cairo'			=> '(GMT+02:00) Cairo',
		'Africa/Harare'			=> '(GMT+02:00) Harare',
		'Europe/Helsinki'		=> '(GMT+02:00) Helsinki',
		'Europe/Istanbul'		=> '(GMT+02:00) Istanbul',
		'Asia/Jerusalem'		=> '(GMT+02:00) Jerusalem',
		'Europe/Kiev'			=> '(GMT+02:00) Kyiv',
		'Europe/Minsk'			=> '(GMT+02:00) Minsk',
		'Europe/Riga'			=> '(GMT+02:00) Riga',
		'Europe/Sofia'			=> '(GMT+02:00) Sofia',
		'Europe/Tallinn'		=> '(GMT+02:00) Tallinn',
		'Europe/Vilnius'		=> '(GMT+02:00) Vilnius',
		'Asia/Baghdad'			=> '(GMT+03:00) Baghdad',
		'Asia/Kuwait'			=> '(GMT+03:00) Kuwait',
		'Europe/Moscow'			=> '(GMT+03:00) Moscow',
		'Africa/Nairobi'		=> '(GMT+03:00) Nairobi',
		'Asia/Riyadh'			=> '(GMT+03:00) Riyadh',
		'Europe/Volgograd'		=> '(GMT+03:00) Volgograd',
		'Asia/Tehran'			=> '(GMT+03:30) Tehran',
		'Asia/Baku'				=> '(GMT+04:00) Baku',
		'Asia/Muscat'			=> '(GMT+04:00) Muscat',
		'Asia/Tbilisi'			=> '(GMT+04:00) Tbilisi',
		'Asia/Yerevan'			=> '(GMT+04:00) Yerevan',
		'Asia/Kabul'			=> '(GMT+04:30) Kabul',
		'Asia/Yekaterinburg'	=> '(GMT+05:00) Ekaterinburg',
		'Asia/Karachi'			=> '(GMT+05:00) Karachi',
		'Asia/Tashkent'			=> '(GMT+05:00) Tashkent',
		'Asia/Kolkata'			=> '(GMT+05:30) Kolkata',
		'Asia/Kathmandu'		=> '(GMT+05:45) Kathmandu',
		'Asia/Almaty'			=> '(GMT+06:00) Almaty',
		'Asia/Dhaka'			=> '(GMT+06:00) Dhaka',
		'Asia/Novosibirsk'		=> '(GMT+06:00) Novosibirsk',
		'Asia/Bangkok'			=> '(GMT+07:00) Bangkok',
		'Asia/Jakarta'			=> '(GMT+07:00) Jakarta',
		'Asia/Krasnoyarsk'		=> '(GMT+07:00) Krasnoyarsk',
		'Asia/Chongqing'		=> '(GMT+08:00) Chongqing',
		'Asia/Hong_Kong'		=> '(GMT+08:00) Hong Kong',
		'Asia/Irkutsk'			=> '(GMT+08:00) Irkutsk',
		'Asia/Kuala_Lumpur'		=> '(GMT+08:00) Kuala Lumpur',
		'Australia/Perth'		=> '(GMT+08:00) Perth',
		'Asia/Singapore'		=> '(GMT+08:00) Singapore',
		'Asia/Taipei'			=> '(GMT+08:00) Taipei',
		'Asia/Ulaanbaatar'		=> '(GMT+08:00) Ulaan Bataar',
		'Asia/Urumqi'			=> '(GMT+08:00) Urumqi',
		'Asia/Seoul'			=> '(GMT+09:00) Seoul',
		'Asia/Tokyo'			=> '(GMT+09:00) Tokyo',
		'Asia/Yakutsk'			=> '(GMT+09:00) Yakutsk',
		'Australia/Adelaide'	=> '(GMT+09:30) Adelaide',
		'Australia/Darwin'		=> '(GMT+09:30) Darwin',
		'Australia/Brisbane'	=> '(GMT+10:00) Brisbane',
		'Australia/Canberra'	=> '(GMT+10:00) Canberra',
		'Pacific/Guam'			=> '(GMT+10:00) Guam',
		'Australia/Hobart'		=> '(GMT+10:00) Hobart',
		'Australia/Melbourne'	=> '(GMT+10:00) Melbourne',
		'Pacific/Port_Moresby'	=> '(GMT+10:00) Port Moresby',
		'Australia/Sydney'		=> '(GMT+10:00) Sydney',
		'Asia/Vladivostok'		=> '(GMT+10:00) Vladivostok',
		'Asia/Magadan'			=> '(GMT+11:00) Magadan',
		'Pacific/Auckland'		=> '(GMT+12:00) Auckland',
		'Pacific/Fiji'			=> '(GMT+12:00) Fiji',
		'Asia/Kamchatka'		=> '(GMT+12:00) Kamchatka'
	];
	// Nombre d'objets par page
	public static $ItemsList = [
		5 => '5 articles',
		10 => '10 articles',
		15 => '15 articles',
		20 => '20  articles'		
	];


	public function generateFiles() {
		// Mettre à jour le site map
		$successSitemap=$this->createSitemap('all');

		// Creer un fichier robots.txt
		$successRobots=$this->updateRobots();
		if ( $successSitemap === true &&
			 $successRobots >= 100) {
					$success = true;
				} else {
					$success = false;
		}
		// Valeurs en sortie
		$this->addOutput([
			'notification' => ($successSitemap === true && $successRobots >= 100) ? 'Création réussie' : 'Echec d\'écriture',
			'redirect' => helper::baseUrl() . 'config',
			'state' => ($successSitemap === true && $successRobots >=100)  ? true : false
		]);
	}

	/**
	 * Met à jour un fichier robots.txt lors du changement de réécriture 
	 */

	public function updateRobots() {
		// Créer le fichier robot si absent
		if (!file_exists('robots.txt')) {
			$this->createRobots();
		}
		// backup
		rename ('robots.txt','robots.bak');
		$fileold = fopen('robots.bak','r');
		$filenew = fopen('robots.txt','w');
		while(!feof($fileold))	{			
			$data = fgets($fileold);
			if (strpos($data,'sitemap.xml') == 0) {
				fwrite($filenew, $data);
			} else {
				fwrite($filenew, 'Sitemap: ' . helper::baseUrl(false) . 'sitemap.xml' . PHP_EOL);
				fwrite($filenew, 'Sitemap: ' . helper::baseUrl(false) . 'sitemap.xml.gz' . PHP_EOL);
				fwrite($filenew, '# ZWII CONFIG  ---------' . PHP_EOL);
				break;
			}
		}
		fclose($fileold);
		unlink('robots.bak');
		return(fclose($filenew));
	}

	/**
	 * Sauvegarde des données
	 */
	public function backup() {
		// Creation du ZIP
		$fileName = str_replace('/','',helper::baseUrl(false,false)) . '-'. date('Y-m-d-h-i-s', time()) . '.zip';
		$zip = new ZipArchive();
		$zip->open(self::TEMP_DIR . $fileName, ZipArchive::CREATE | ZipArchive::OVERWRITE);
		$directory = 'site/';
		$filter = array('backup','tmp');
		$files =  new RecursiveIteratorIterator(
			new RecursiveCallbackFilterIterator(
			  new RecursiveDirectoryIterator(
				$directory,
				RecursiveDirectoryIterator::SKIP_DOTS
			  ),
			  function ($fileInfo, $key, $iterator) use ($filter) {
				return $fileInfo->isFile() || !in_array($fileInfo->getBaseName(), $filter);
			  }
			)
		  );
		foreach ($files as $name => $file) 	{
			if (!$file->isDir()) 	{
				$filePath = $file->getRealPath();
				$relativePath = substr($filePath, strlen(realpath('site/')) + 1);
				$zip->addFile($filePath, $relativePath);
			} 
			
		}
		$zip->close();
		// Téléchargement du ZIP
		header('Content-Type: application/zip');
		header('Content-Disposition: attachment; filename="' . $fileName . '"');
		header('Content-Length: ' . filesize(self::TEMP_DIR . $fileName));
		readfile(self::TEMP_DIR . $fileName);
		// Valeurs en sortie
		$this->addOutput([
			'display' => self::DISPLAY_RAW
		]);
		unlink(self::TEMP_DIR . $fileName);
	}

	/**
	 * Réalise une copie d'écran du site
	 *  https://www.codexworld.com/capture-screenshot-website-url-php-google-api/
	 */
	public function configMetaImage() {
		// fonction désactivée pour un site local		
		if ( strpos(helper::baseUrl(false),'localhost') > 0 OR strpos(helper::baseUrl(false),'127.0.0.1') > 0)	{				
			$site = 'https://zwiicms.com/'; } else {
			$site = helper::baseUrl(false);	}
		
		$success= false;
		$googlePagespeedData = @file_get_contents('https://www.googleapis.com/pagespeedonline/v2/runPagespeed?url='. $site .'&screenshot=true');
		if ($googlePagespeedData  !== false) {
			$googlePagespeedData = json_decode($googlePagespeedData, true);
			$screenshot = $googlePagespeedData['screenshot']['data'];
			$screenshot = str_replace(array('_','-'),array('/','+'),$screenshot);
			$data = 'data:image/jpeg;base64,'.$screenshot;
			$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));			
			// Effacer la miniature
			if (file_exists(self::FILE_DIR.'thumb/screenshot.png')) {
				unlink (self::FILE_DIR.'thumb/screenshot.png');
			}
			file_put_contents( self::FILE_DIR.'source/screenshot.png',$data);
			$success =true;
		}

		// Valeurs en sortie
		$this->addOutput([
			'notification' => $success === true ? 'Image tag réinitialisée' : "Erreur : image tag non créée",
			'redirect' => helper::baseUrl() . 'config',
			'state' => $success
		]);
	}	

	

	/**
	 * Configuration
	 */
	public function index() {
		// Soumission du formulaire
		if($this->isPost()) {
			if ($this->getInput('configLegalCheck', helper::FILTER_BOOLEAN) === true ) {
				$legalPageId = $this->getInput('configLegalPageId', helper::FILTER_ID);
			} else {
				$legalPageId = '';
			}
			$this->setData([
				'config',
				[
					'analyticsId' => $this->getInput('configAnalyticsId'),
					'autoBackup' => $this->getInput('configAutoBackup', helper::FILTER_BOOLEAN),
					'maintenance' => $this->getInput('configMaintenance', helper::FILTER_BOOLEAN),
					'cookieConsent' => $this->getInput('configCookieConsent', helper::FILTER_BOOLEAN),
					'favicon' => $this->getInput('configFavicon'),
					'homePageId' => $this->getInput('configHomePageId', helper::FILTER_ID, true),
					'metaDescription' => $this->getInput('configMetaDescription', helper::FILTER_STRING_LONG, true),
					'social' => [
						'facebookId' => $this->getInput('configSocialFacebookId'),
						'linkedinId' => $this->getInput('configSocialLinkedinId'),
						'instagramId' => $this->getInput('configSocialInstagramId'),
						'pinterestId' => $this->getInput('configSocialPinterestId'),
						'twitterId' => $this->getInput('configSocialTwitterId'),
						'youtubeId' => $this->getInput('configSocialYoutubeId'),
						'githubId' => $this->getInput('configSocialGithubId')
					],
					'timezone' => $this->getInput('configTimezone', helper::FILTER_STRING_SHORT, true),
					'title' => $this->getInput('configTitle', helper::FILTER_STRING_SHORT, true),
					'itemsperPage' => $this->getInput('itemsperPage', helper::FILTER_INT,true),
					'legalPageId' => $this->getInput('configLegalPageId'),
					'autoUpdate' => $this->getInput('configAutoUpdate', helper::FILTER_BOOLEAN)
				]
			]);
			if(self::$inputNotices === []) {
				// Ecrire les fichiers de script
				file_put_contents(self::DATA_DIR . 'head.inc.html',$this->getInput('configScriptHead',null));
				file_put_contents(self::DATA_DIR . 'body.inc.html',$this->getInput('configScriptBody',null));				
				// Active la réécriture d'URL
				$rewrite = $this->getInput('rewrite', helper::FILTER_BOOLEAN);
				if(
					$rewrite
					AND helper::checkRewrite() === false
				) {
					// Ajout des lignes dans le .htaccess
					file_put_contents(
						'.htaccess',
						PHP_EOL .
						'<ifModule mod_rewrite.c>' . PHP_EOL .
						"\tRewriteEngine on" . PHP_EOL .
						"\tRewriteBase " . helper::baseUrl(false, false) . PHP_EOL .
						"\tRewriteCond %{REQUEST_FILENAME} !-f" . PHP_EOL .
						"\tRewriteCond %{REQUEST_FILENAME} !-d" . PHP_EOL .
						"\tRewriteRule ^(.*)$ index.php?$1 [L]" . PHP_EOL .
						'</ifModule>',
						FILE_APPEND
					);
					// Change le statut de la réécriture d'URL (pour le helper::baseUrl() de la redirection)
					helper::$rewriteStatus = true;
				}
				// Désactive la réécriture d'URL
				elseif(
					$rewrite === false
					AND helper::checkRewrite()
				) {
					// Suppression des lignes dans le .htaccess
					$htaccess = explode('# URL rewriting', file_get_contents('.htaccess'));
					file_put_contents('.htaccess', $htaccess[0] . '# URL rewriting');
					// Change le statut de la réécriture d'URL (pour le helper::baseUrl() de la redirection)
					helper::$rewriteStatus = false;
				}
			}
			// Générer robots.txt et sitemap
			$this->generateFiles();
			// Valeurs en sortie
			$this->addOutput([
				'redirect' => helper::baseUrl() . $this->getUrl(),
				'notification' => 'Modifications enregistrées',
				'state' => true
			]);
		}
		// Initialisation du screen 
		if (!file_exists(self::FILE_DIR.'source/screenshot.png')) {
			$this->configMetaImage();
		}
		// Valeurs en sortie
		$this->addOutput([
			'title' => 'Configuration',
			'view' => 'index'
		]);
	}

}

class configHelper extends helper {

	/**
	 * Scan le contenu d'un dossier et de ses sous-dossiers
	 * @param string $dir Dossier à scanner
	 * @return array
	 */
	public static function scanDir($dir) {
		$dirContent = [];
		$iterator = new DirectoryIterator($dir);
		foreach($iterator as $fileInfos) {
			if(in_array($fileInfos->getFilename(), ['.', '..', 'backup'])) {
				continue;
			}
			elseif($fileInfos->isDir()) {
				$dirContent = array_merge($dirContent, self::scanDir($fileInfos->getPathname()));
			}
			else {
				$dirContent[] = $fileInfos->getPathname();
			}
		}
		return $dirContent;
	}

}
