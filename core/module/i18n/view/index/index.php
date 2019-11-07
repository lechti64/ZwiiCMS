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
			<p>Rendez votre site multilingue en ajoutant une ou plusieurs langues européennes. Pour d'autres langues, <a href="core/module/i18n/ressource/readme.txt" target="_blank">consultez la notice</a>.</p>
			<p><strong>Mode d'emploi :</strong></p>
			<p>
				<ol>
				<li>Commencez par choisir une langue. A ce stade, votre nouveau site ne comprendra que la page d'accueil.</li>
				<li>Choisissez éventuellement le site, en français ou dans une autre langue, que vous souhaitez dupliquer.</li>
				</ol>
			</p>
			<p>Il faudra malgré tout rédiger ou traduire vos pages...</p>
		</div>
	</div>
	<div class="row">
		<div class="col6">
			<div class="block">
				<h4>Nouvelle langue</h4>
				<div class="col12">
					<?php 
						$available = array ('' => 'Sélectionner');
						$available = array_merge ($available, array_diff(self::$i18nList,$this->i18nInstalled()));
						echo template::select('i18nLanguageAdd', $available, [
						//'label' => 'Nouvelle langue'
						]); ?>	
				</div>										
			</div>
		</div>				
		<div class="col6">
			<div class="block">
				<h4>Site à dupliquer</h4>
				<div class="row">			
					<div class="12">
						<?php echo template::select('i18nLanguageCopyFrom', $this->i18nInstalled(true), [
							//'label' => 'Site à reproduire',
							'selected' => -1 					
						]); ?>
					</div>
				</div>					
			</div>
		</div>		
	</div>

	<?php echo template::table([11, 1], $module::$languages, ['Langues installées',  '']); ?>
<?php echo template::formClose(); ?>	
