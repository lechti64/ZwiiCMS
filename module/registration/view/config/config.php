<div class="row">
    <div class="col2">
        <?php echo template::button('registrationAddBack', [
            'class' => 'buttonGrey',
            'href' => helper::baseUrl() .'page/edit/' . $this->getUrl(0) ,
            'ico' => 'left',
            'value' => 'Retour'
        ]); ?>
    </div>
</div>
<div class="col12 textAlignCenter">
    <h3> Rien à configurer </h3>
</div>