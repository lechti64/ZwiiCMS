<?php echo template::formOpen('i18nAdd'); ?>
	<div class="row">
		<div class="col2">
			<?php echo template::button('i18nAddBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() .'i18n',
				'value' => 'Retour'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('i18NAddSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Ajouter une localisation</h4>
				<div class="row">			
					<div class="col5">
						<?php echo template::select('i18nAddCopyFrom', $this->i18nInstalled(true), [
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
							echo template::select('i18nAddSelect', $available, [
							'label' => 'vers'
							]); ?>
					</div>
				</div>
			</div>
		</div>		
	</div>
<?php echo template::formClose(); ?>