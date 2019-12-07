<?php echo template::formOpen('reviewConfigForm'); ?>
	<div class="row">
		<div class="col2">
			<?php echo template::button('reviewConfigBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() . $this->getUrl(0) . '/config',
				'ico' => 'left',
				'value' => 'Retour'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('reviewConfigSubmit', [
				'value' => 'Enregistrer'
			]); ?>
		</div>
	</div>
	<div class="row">
		<div class="col6">
			<div class="block">
            <h4>Paramètres</h4>
            <!--
                iconGrades -> int (nombre d'icônes de vote, note maxi)
                iconPictureNoRate -> string (fichier vers l'icône vide)
                iconPictureRate -> string (fichier vers l'icône vote)
                minus -> bool (false autorise un vote à 0, true limite le vote minima à 1)
                moderation -> bool (modération des votes, usage ultérieur)
                -->
                <div class="row">
                    <div class="col12">
                        <?php echo template::select('reviewConfigiconGrades', $module::$iconGrades, [
                            'label' => 'Echelle de satisfaction',
                            'help'  => 'Entre 3 à 6',
                            'selected' => $this->getData(['module', $this->getUrl(0), 'config', 'user'])
                        ]); ?>
					</div>            
                </div>
                <div class="row">
                    <div class="col12">
                        <?php echo template::checkbox('reviewConfigMinusZero', true, 'Autoriser un vote sans note', [
                            'help' => 'Dérermine la valeur de note minimale, soit ZERO, soit UN.',
                            'checked' => $this->getData(['module', $this->getUrl(0), $this->getUrl(2), 'minusZero'])
                            ]); ?>
					</div>        
                </div>
            </div>
        </div>
		<div class="col6">
			<div class="block">
            <h4>Notifications</h4>
                <div class="row">
                    <div class="col12">
                        <?php echo template::checkbox('reviewConfigmailNotification', true, 'Notifier du dépôt d\'un avis', [
                                'checked' => $this->getData(['module', $this->getUrl(0), $this->getUrl(2), 'mailNotification'])
                            ]); ?>
                    </div>
                </div>    
                <div class="row">
                    <div class="col12">
                    <?php echo template::select('reviewConfigGroupNotification', $module::$groupNews, [
                            'label' => 'A partir du groupe :',
                            'selected' => $this->getData(['module', $this->getUrl(0), $this->getUrl(2), 'groupNotification'])
                        ]); ?>
                    </div>
                </div>            
            </div>
        </div>
    </div>    
    <div class="row">
		<div class="col12">
			<div class="block">
            <h4>Paramètres avancés</h4>
                <div class="row">
                    <div class="col6"> 
                        <?php echo template::checkbox('reviewConfigCloseComment', true, 'Fermer les avis', [
                                'checked' => $this->getData(['module', $this->getUrl(0), $this->getUrl(2), 'closeComment'])
                            ]); ?>
                    </div>
                </div>
            </div>    
        </div>
    </div>
<?php echo template::formClose(); ?>            