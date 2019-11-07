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
			<h4>Ajouter ou dupliquer une nouvelle langue</h4>
				<div class="row">
					<div class="col6">
						<?php 
							$available = array ('' => 'Sélectionner');
							$available = array_merge ($available, array_diff(self::$i18nList,$this->i18nInstalled()));
							echo template::select('i18nLanguageAdd', $available, [
							'label' => 'Nouvelle langue'
							]); ?>									
					</div>				
					<div class="col6">
						<?php echo template::select('i18nLanguageCopyFrom', $this->i18nInstalled(true), [
							'label' => 'Site à copier',
							'selected' => -1 					
						]); ?>			
					</div>	
					<div class="col12">
						<a href="./core/module/i18n/ressource/readme.html" data-lity>Aide à la gestion des langues</a>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<?php echo template::table([11, 1], $module::$languages, ['Langues installées',  '']); ?>
<?php echo template::formClose(); ?>	
