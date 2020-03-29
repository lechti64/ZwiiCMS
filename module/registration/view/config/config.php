<div class="row">
    <div class="col2">
        <?php echo template::button('registrationConfigBack', [
            'class' => 'buttonGrey',
            'href' => helper::baseUrl() .'page/edit/' . $this->getUrl(0) ,
            'ico' => 'left',
            'value' => 'Retour'
        ]); ?>
    </div>
    <div class="col2 offset8">
			<?php echo template::submit('registrationConfigSubmit'); ?>
		</div>
</div>
<div class="row">
    <div class="col10 offset1">
        <div class="block">
        <h4>Paramètres</h4>
        <div class="row">
            <div class="col6">
                <?php echo template::select('registrationConfigTimeOut',  $module::$timeLimit , [
                    'label' => 'Délais Mail confirmation',
                    'selected' => $this->getData(['user','config','timeOut'])
                ]); ?>
            </div>
            <div class="col6">
                <?php echo template::select('registrationConfigSuccess', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
                    'label' => 'Page de confirmation d\'inscription',
                    'selected' => $this->getData(['user','config','pageSuccess'])
                ]); ?>
            </div> 
        </div>
        <div class="row">                
            <div class="col6 verticalAlignMiddle">
                <?php echo template::checkbox('registrationConfigState', true, 'Un administrateur doit valider l\'inscription', [
                    'checked' => $this->getData(['user','config','state']),
                    'help' => 'Les comptes sont bannis avant validation par un administrateur.'
                ]); ?>
            </div>
            <div class="col6">
                <?php echo template::select('registrationConfigError', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
                    'label' => 'Page d\'erreur de confirmation',
                    'selected' => $this->getData(['user','config','pageTimeOut'])
                ]); ?>
            </div> 
        </div>
    </div>
</div>