<?php echo template::formOpen('galleryConfigOrder'); ?>
<div class="row">
	<div class="col2">
		<?php echo template::button('galleryConfigBack', [
			'class' => 'buttonGrey',
			'href' => helper::baseUrl() . 'page/edit/' . $this->getUrl(0),
			'ico' => 'left',
			'value' => 'Retour'
		]); ?>
	</div>
	<div class="col2 offset6">
		<?php echo template::button('galleryConfigAdd', [
			'class' => 'button',
			'href' => helper::baseUrl() . $this->getUrl(0) .'/add',
			'ico' => 'plus',
			'value' => 'Galerie'
		]); ?>
	</div>
	<div class="col2">
		<?php echo template::submit('galleryConfigSubmit', [
				'ico' => '',
				'value' => "Trier"
			]); ?>
	</div>
	<div class="col12">
		<?php if($module::$galleries): ?>
			<?php echo template::table([1, 4, 5, 1, 1], $module::$galleries, ['','Nom', 'Dossier cible', '', ''], ['id' => 'galleryTable'],$module::$galleriesId); ?>
			<?php echo template::hidden('galleryConfigResponse'); ?>
		<?php else: ?>
			<?php echo template::speech('Aucune galerie.'); ?>
		<?php endif; ?>
	</div>
<?php echo template::formClose(); ?>
<div class="moduleVersion">Version n°
	<?php echo $module::GALLERY_VERSION; ?>
</div>