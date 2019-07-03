<?php echo template::formOpen('searchForm'); ?>
	<div class="row">
		<div class="col12">
			<div class="block">
            <h4>Rechercher</h4>
                <div class="row">
                    <div class="col10 verticalAlignBottom">
                        <?php echo template::text('searchMotphraseclef', [
                            'label' => 'Mot ou phrase clef',
                            'value' => $_POST['searchMotphraseclef'],
                            'help'  => 'Saisir un mot ou une phrase complète sans guillemets, n\'oubliez pas les accents.'
                        ]); ?>
                    </div>
                    <div class="col2 verticalAlignBottom">
                        <?php echo template::submit('pageEditSubmit', [
                            'value' => 'Valider'
                        ]); ?>
                    </div>
                </div>
                <div class="row">
                    <?php echo template::checkbox('searchMotentier', true, 'Mot entier uniquement', [
                        'value' =>'1',
                        'help'	=> 'Cette option permet de faire une recherche sur un mot entier plutôt que sur une portion de mot.'
                    ]); ?>
                </div>
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
