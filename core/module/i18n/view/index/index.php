<?php echo template::formOpen('i18nIndex'); ?>
    <div class="row">
        <div class="col2">
            <?php echo template::button('configBack', [
                'class' => 'buttonGrey',
                'href' => helper::baseUrl(false),
                'ico' => 'home',
                'value' => 'Accueil'
            ]); ?>
        </div>
        <div class="col2 offset6">
            <?php echo template::button('configBack', [
				'href' => helper::baseUrl() . $this->getUrl(0) . '/config',
                'value' => 'Langues'
            ]); ?>
        </div>		
        <div class="col2">
            <?php echo template::submit('configSubmit'); ?>
        </div>
    </div>
    <div class="row">
		<div class="col12">
			<div class="block">
				<h4>Informations langue :  
				<?php echo  $this->geti18n();?></h4>
				<div class="row">
					<div class="col4">
						<?php echo template::select('pagei18nHomePageId', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
							'label' => 'Page d\'accueil',
							'selected' => $this->getData(['page', 'homePageId'])
						]); ?>
					</div>
					<div class="col8">
						<?php echo template::text('pagei18nPageTitle', [
							'label' => 'Titre du site',
							'value' => $this->getData(['page', 'title']),
							'help'  => 'Il apparaît dans la barre de titre et les partages sur les réseaux sociaux.'
						]); ?>
					</div>						
				</div>
				<?php echo template::textarea('pagei18nMetaDescription', [
					'label' => 'Description du site',
					'value' => $this->getData(['page', 'metaDescription']),
					'help'  => 'Elle apparaît dans les partages sur les réseaux sociaux.'
				]); ?>
			</div>
		</div>		
	</div>    
<?php echo template::formClose(); ?>    
