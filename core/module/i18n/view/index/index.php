<?php echo template::formOpen('i18nIndexForm'); ?>	
	<div class="row">
		<div class="col2">
			<?php echo template::button('i18nBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl(false),
				'ico' => 'home',
				'value' => 'Accueil'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('galleryEditSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Ajouter une localisation</h4>
				<div class="row">			
					<div class="col5">
						<?php echo template::select('i18nLanguageCopyFrom', $this->i18nInstalled(true), [
							'label' => 'Copier la structure de',
							'help' => 'Ne rien sélectionner pour une copie vierge ',
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
	</div>
	<?php echo template::table([11, 1], $module::$languages, ['Langues installées',  '']); ?>
<?php echo template::formClose(); ?>	