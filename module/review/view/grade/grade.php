<div class="row">
	<div class="col2">
		<?php echo template::button('blogConfigBack', [
			'class' => 'buttonGrey',
			'href' => helper::baseUrl() . 'page/edit/' . $this->getUrl(0),
			'ico' => 'left',
			'value' => 'Retour'
		]); ?>
	</div>
	<div class="col2 offset8">
		<?php echo template::button('blogConfigComment', [
			'href' => helper::baseUrl() . $this->getUrl(0) . '/review',
			'value' => 'Gérer les avis'
		]); ?>
	</div>
</div>
<?php if($module::$rates): ?>
	<?php echo template::table([4, 4, 2, 1, 1], $module::$rates, ['Titre', 'Date de publication', 'État', '', '']); ?>
	<?php echo $module::$pages; ?>
<?php else: ?>
	<?php echo template::speech('Aucun article.'); ?>
<?php endif; ?>
<div class="moduleVersion">Version n°
	<?php echo $module::REVIEW_VERSION; ?>
</div>