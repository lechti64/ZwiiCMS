<?php echo template::formOpen('i18nIndex'); ?>
	<div class="row">
		<div class="col2">
			<?php echo template::button('i18nBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl(false),
				'ico' => 'home',
				'value' => 'Accueil'
			]); ?>
		</div>
		<div class="col2 offset6">
			<?php echo template::button('i18nAddButton', [
				'href' => helper::baseUrl() . 'i18n/add',
				'value' => 'Ajouter'
			]); ?>
		</div>	
		<div class="col2">
			<?php echo template::submit('i18nSubmit'); ?>
		</div>
	</div>
	<div class="row">	
		<div class="col12">
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
	<!--
	<div class="row">
		<div class="col4">
			<?php echo template::select('i18nHomePageId', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
				'label' => 'Page d\'accueil',
				//'selected' => $this->getData(['config', 'homePageId'])
			]); ?>
		</div>
	</div>
	-->
<?php echo template::formClose(); ?>