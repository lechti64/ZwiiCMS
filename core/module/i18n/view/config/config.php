<?php echo template::formOpen('i18nConfig'); ?>
	<div class="row">
		<div class="col2">
			<?php echo template::button('configBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() . $this->getUrl(0) ,
				'value' => 'Retour'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('configSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col8">
			<div class="block">
				<h4>Ajouter une localisation</h4>
				<div class="row">			
					<div class="col5">
						<?php echo template::select('i18nLanguageCopyFrom', $this->i18nInstalled(true), [
							'label' => 'Copier à partir ',
							'help' => 'Pour démarrer sans copie des pages te des modules d\'une langue existante, ne rien sélectionner',
							'selected' => -1 					
						]); ?>
					</div>
					<div class="col1">
						<?php echo template::ico('right-big'); ?>
					</div>
					<div class="col5">
						<?php 
							$available = array ('' => 'Sélectionner');
							$available = array_merge ($available, self::$i18nList);
							echo template::select('i18nLanguageAdd', $available, [
							'label' => 'vers'
							]); ?>
					</div>
				</div>
			</div>
		</div>	
		<div class="col4">
			<div class="block">
				<h4>Supprimer une localisation</h4>
				<div class="row">
					<?php echo template::select('i18nLanguageRemove', $this->i18nInstalled(true, true), [
						'label' => 'Localisations installées',
						'help' => 'La suppression d\'une langue entraîne l\'effacement des pages et des modules',
						'selected' => -1 					
					]); ?>
				</div>
			</div>
		</div>	
	</div>
<?php echo template::formClose(); ?>