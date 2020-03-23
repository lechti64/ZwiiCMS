<div class="row">
	<div class="col2">
		<?php echo template::button('galleryGalleryBack', [
			'class' => 'buttonGrey',
			'href' => helper::baseUrl() . $this->getUrl(0),
			'ico' => 'left',
			'value' => 'Retour'
		]); ?>
	</div>
</div>
<!-- Ajout du début de la ligne row  en rajoutant la class rowGallery (on supprime $i et $picturesNb) ********************** -->
<div class="row galleryRow">
<?php foreach($module::$pictures as $picture => $legend): ?>
    <div class="col3">
        <a
            href="<?php echo helper::baseUrl(false) . $picture; ?>"
            class="galleryGalleryPicture"
            style="background-image:url('<?php echo helper::baseUrl(false) . $picture; ?>')"
            data-caption="<?php echo $legend; ?>"
        >
            <?php if($legend): ?>
                <div class="galleryGalleryName"><?php echo $legend; ?></div>
            <?php endif; ?>
        </a>
    </div>
<?php endforeach; ?>
