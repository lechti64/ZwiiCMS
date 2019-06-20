<?php echo template::formOpen('searchForm'); ?>
	<div class="row">
		<div class="col2">
				<?php $href = helper::baseUrl() . $this->getUrl(2); ?>
				<?php if ($this->getData(['page', $this->getUrl(2), 'moduleId']) === 'redirection' || 'code')$href = helper::baseUrl(); ?>
				<?php echo template::button('searchBack', [
					'class' => 'buttonGrey',
					'href' => $href,
					'ico' => 'left',
					'value' => 'Retour'
				]); ?>
			</div>
			<div class="col2 offset8">
				<?php echo template::submit('pageEditSubmit'); ?>
			</div>
		</div>
		<div class="col12">
			<div class="block">
				<h4>Zone de saisie : </h4>
				<?php echo template::text('searchMotphraseclef', [
						'label' => 'Mot ou phrase clef',
						'value' => '',
						'help'  => 'Saisir un mot ou une phrase clef pour votre recherche, n\'oubliez pas les accents.'
					]); ?>
			</div>
		</div>
	</div>		
<?php echo template::formClose(); ?>
