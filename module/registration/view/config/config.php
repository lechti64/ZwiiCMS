<?php echo template::formOpen('registrationConfig'); ?>
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
        <div class="col12">
            <div class="block">
            <h4>Paramètres d'envoi</h4>
            <div class="row">                
                <div class="col6 verticalAlignMiddle">
                    <?php echo template::checkbox('registrationConfigState', true, 'Un administrateur doit valider l\'inscription', [
                        'checked' => $this->getData(['module','registration',$this->getUrl(0),'config','state']),
                        'help' => 'Les comptes sont bannis avant validation par un administrateur.'
                    ]); ?>
                </div>

            </div>            
            <div class="row">  
                <div class="col12">
                    <?php echo template::textarea('registrationconfigMailContent', [
                            'label' => 'Message dans le mail',
                            'value' => $this->getData(['module','registration',$this->getUrl(0),'config','mailContent']),
                            'class' => 'editorWysiwyg',
                            'help' => 'L\'URL de confirmation est insérée après ce texte.'
                        ]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col12">
            <div class="block">
            <h4>Paramètres du lien de validation</h4>
            <div class="row">
                <div class="col6">
                    <?php echo template::select('registrationConfigTimeOut',  $module::$timeLimit , [
                        'label' => 'Durée de validité',
                        'selected' => $this->getData(['module','registration',$this->getUrl(0),'config','timeOut'])
                    ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="col6">
                    <?php echo template::select('registrationConfigSuccess', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
                        'label' => 'Redirection confirmation d\'inscription',
                        'selected' => $this->getData(['module','registration',$this->getUrl(0),'config','pageSuccess'])
                    ]); ?>
                </div>             
                <div class="col6">
                    <?php echo template::select('registrationConfigError', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
                        'label' => 'Redirection Erreur',
                        'selected' => $this->getData(['module','registration',$this->getUrl(0),'config','pageError']),
                        'help' =>  'Temps dépassé ou erreur de la clé de contrôle'
                    ]); ?>
                </div>
            </div>
        </div>
    </div>
            

<?php echo template::formClose(); ?>    
<div class="moduleVersion">Version n°
	<?php echo $module::REGISTRATION_VERSION; ?>
</div>