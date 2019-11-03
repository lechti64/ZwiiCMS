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
		<div class="col6">
			<div class="block">
				<h4>Ajouter une langue</h4>
				<div class="col12">
					<?php 
						$available = array ('' => 'Sélectionner');
						$available = array_merge ($available, array_diff(self::$i18nList,$this->i18nInstalled()));
						echo template::select('i18nLanguageAdd', $available, [
						'label' => 'Sélectionner une langue à installer'
						]); ?>	
				</div>										
			</div>
		</div>				
		<div class="col6">
			<div class="block">
				<h4>Options</h4>
				<div class="row">			
					<div class="12">
						<?php echo template::select('i18nLanguageCopyFrom', $this->i18nInstalled(true), [
							'label' => 'Traduction manuelle à partir du site dans cette langue',
							'selected' => -1 					
						]); ?>
					</div>
				</div>					
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col12">
			<p><em>Comment ajouter une nouvelle langue .</em></p>
			<p><em>1 - Sélectionnez simplement une langue et validez, une nouvelle page est créée.</em></p>
			<p><em>2 - En supplément, sélectionnez une langue dans laquelle le site a déjà été réalisé et validez. Le site est créé dans la nouvelle langue, vous devez traduire les pages.</em></p>
			<p><em>Note : le site bascule dans la langue du visiteur selon, la langue par défaut du navigateur ou le choix de la langue dans le menu.<em>
		</div>
	</div>

	<?php echo template::table([11, 1], $module::$languages, ['Langues installées',  '']); ?>
<?php echo template::formClose(); ?>	