<?php echo template::formOpen('galleryAddForm'); ?>
	<?php echo template::formOpen('galleryAddOrder'); ?>
	<div class="row">
		<div class="col2">
			<?php echo template::button('galleryAddBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() .  $this->getUrl(0) . '/config',
				'ico' => 'left',
				'value' => 'Retour'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('galleryAddSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Nouvelle galerie</h4>
				<div class="row">
					<div class="col4">
						<?php echo template::text('galleryAddName', [
							'label' => 'Nom de la galerie'
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::hidden('galleryAddDirectoryOld', [
							'noDirty' => true // Désactivé à cause des modifications en ajax
						]); ?>
						<?php echo template::select('galleryAddDirectory', [], [
							'label' => 'Dossier cible',
							'noDirty' => true // Désactivé à cause des modifications en ajax
						]); ?>
					</div>
					<div class="col4">
						<?php echo template::select('galleryAddSort', $module::$sort, [
							'label' => 'Tri des images',
							'help' => 'Les images sont triées par nom de fichier grâce à la méthode naturelle qui donne de meilleurs résultats lorsque les images sont numérotées.'
						]); ?>	
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php echo template::formClose(); ?>
<div class="moduleVersion">Version n°
	<?php echo $module::GALLERY_VERSION; ?>
</div>