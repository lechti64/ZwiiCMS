<?php echo template::formOpen('searchForm'); ?>
	<div class="row">
		<div class="col2">
				<?php $href = helper::baseUrl() . $this->getUrl(2); ?>
				<?php if ($this->getData(['page', $this->getUrl(2), 'moduleId']) === 'redirection' || 'code')$href = helper::baseUrl(); ?>
				<?php echo template::button('searchBack', [
					'class' => 'buttonGrey',
					'href' => $href . 'search',
					'ico' => 'left',
					'value' => 'Retour'
				]); ?>
			</div>
		</div>
		<div class="col12">
			<div class="block">
				<h4>Résulats</h4>
				<?php echo $_POST['result']; ?>
			</div>
		</div>
	</div>		
<?php echo template::formClose(); ?>