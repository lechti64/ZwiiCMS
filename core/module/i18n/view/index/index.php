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
				<h4>Ajouter une langue</h4>
				<div class="row">			
					<div class="col3 offset1">
						<?php echo template::select('i18nLanguageCopyFrom', $this->i18nInstalled(true), [
							'label' => 'Copier les pages de',
							'selected' => -1 					
						]); ?>
					</div>
					<div class="col1 offset1 textAlignCenter">
						<h3>▶</h3>
					</div>
					<div class="col3 offset1">
						<?php 
							$available = array ('' => 'Sélectionner');
							$available = array_merge ($available, self::$i18nList);
							echo template::select('i18nLanguageAdd', $available, [
							'label' => 'Langue à créer'
							]); ?>
					</div>					
				</div>
				<div class="row">
					<div class="col12">
					<em>L'ajout d'une langue est concrétisé par la création d'un nouveau jeu de pages. Ce jeu de pages peut être minimal, dans ce cas
					une seule page d'accueil est créée. Sinon vous pouvez sélectionner un jeu de page existant ce qui vous permet de réaliser
					la traduction des textes sans avoir à créer de nouvelles pages.</em> 
					</div>
				</div>
			</div>
		</div>		
	</div>
	<?php echo template::table([11, 1], $module::$languages, ['Langues installées',  '']); ?>
<?php echo template::formClose(); ?>	