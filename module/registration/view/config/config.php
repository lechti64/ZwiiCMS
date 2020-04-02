
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
    <div class="col2 offset6">
        <?php echo template::button('registrationConfigBack', [
            'href' => helper::baseUrl() .$this->getUrl(0) . '/user' ,
            'value' => 'Inscriptions'
        ]); ?>
    </div>
    <div class="col2">
            <?php echo template::submit('registrationConfigSubmit'); ?>
    </div>
</div>
<div class="row">
    <div class="col12">
        <div class="block">
            <h4>Validation de l'adresse mail</h4>
            <div class="row">
                <div class="col6">
                    <?php echo template::select('registrationConfigTimeOut',  $module::$timeLimit , [
                        'label' => 'Durée de validité du lien',
                        'selected' => $this->getData(['module','registration',$this->getUrl(0),'config','timeOut'])
                    ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="col6">
                    <?php echo template::select('registrationConfigSuccess', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
                        'label' => 'Redirection après confirmation',
                        'selected' => $this->getData(['module','registration',$this->getUrl(0),'config','pageSuccess'])
                    ]); ?>
                </div>             
                <div class="col6">
                    <?php echo template::select('registrationConfigError', helper::arrayCollumn($this->getData(['page']), 'title', 'SORT_ASC'), [
                        'label' => 'Redirection après erreur',
                        'selected' => $this->getData(['module','registration',$this->getUrl(0),'config','pageError'])
                    ]); ?>
                </div>
            </div>
            <div class="row">  
                <div class="col12">
                    <?php $messageDefault = '<p>Confirmez votre inscription en cliquant sur ce lien dans les _ minutes.</p>'; ?>
                    <?php echo template::textarea('registrationconfigMailRegisterContent', [
                            'label' => 'Contenu du mail de vérification de l\'adresse mail.',
                            'value' => !empty($this->getData(['module','registration',$this->getUrl(0),'config','mailRegisterContent'])) ? $this->getData(['module','registration',$this->getUrl(0),'config','mailRegisterContent']) : $messageDefault,
                            'class' => 'editorWysiwyg',
                            'help' => 'Un lien sera inséré après ces explications.'
                        ]); ?>
                </div>
            </div>
        </div>
    </div>
</div>    
<div class="row">
    <div class="col12">
        <div class="block">
            <h4>Paramètres de l'inscription après validation de l'adresse mail</h4>
            <div class="row">                
                <div class="col6 verticalAlignMiddle">
                    <?php echo template::checkbox('registrationConfigState', true, 'Validation préalable par un administrateur', [
                        'checked' => $this->getData(['module','registration',$this->getUrl(0),'config','state']),
                        'help' => 'Les comptes sont inactifs tant que les inscriptions ne sont pas validées.'
                        ]); ?>
                </div>
            </div>            
            <div class="row">  
                <div class="col12">
                <?php $messageDefault .= '<p>Elle ne sera définitive que lorsqu\'un administrateur l\'aura approuvée.</p>'; ?>
                    <?php echo template::textarea('registrationconfigMailValidateContent', [
                        'label' => 'Contenu du mail de confirmation de l\'inscription',
                        'value' =>!empty($this->getData(['module','registration',$this->getUrl(0),'config','mailValidateContent'])) ? $this->getData(['module','registration',$this->getUrl(0),'config','mailValidateContent']) : $messageDefault,
                        'class' => 'editorWysiwyg'
                        ]); ?>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php echo template::formClose(); ?>    
<div class="moduleVersion">Version n°<?php echo $module::REGISTRATION_VERSION; ?>
</div>
