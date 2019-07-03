<?php echo template::formOpen('themeFooterForm'); ?>
<div class="row">
    <div class="col2">
        <?php echo template::button('themeFooterBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() . 'theme',
				'ico' => 'left',
				'value' => 'Retour'
			]); ?>
    </div>
    <div class="col2 offset8">
        <?php echo template::submit('themeFooterSubmit'); ?>
    </div>
</div>
<div class="row">
    <div class="col6">
        <div class="block">
            <h4>Couleurs</h4>
            <div class="row">
                <div class="col6">
                    <?php echo template::text('themeFooterBackgroundColor', [
							'class' => 'colorPicker',
							'label' => 'Fond',
							'value' => $this->getData(['theme', 'footer', 'backgroundColor'])
						]); ?>
                </div>
                <div class="col6">
                    <?php echo template::text('themeFooterTextColor', [
							'class' => 'colorPicker',
							'label' => 'Texte',
							'value' => $this->getData(['theme', 'footer', 'textColor'])
						]); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col6">
        <div class="block">
            <h4>Contenu Copyright</h4>
            <div class="row">
                <div class="col6">
                    <div class="row">
                        <?php echo template::checkbox('themefooterDisplayCopyright', true, 'Mention "Motorisé par"', [
                                'checked' => $this->getData(['theme', 'footer','displayCopyright'])
                            ]); ?>
                    </div>
                    <div class="row">
                        <?php echo template::checkbox('themefooterDisplayVersion', true, 'Numéro de version', [
                                'checked' => $this->getData(['theme', 'footer','displayVersion'])
                            ]); ?>
                    </div>
                    <div class="row">
                        <?php echo template::checkbox('themeFooterDisplayLegal', true, 'Mentions légales', [
                                'checked' =>  $this->getData(['config', 'legalPageId']) === '' ? false : $this->getData(['theme', 'footer', 'displayLegal']),
                            ]); ?>
                    </div>
                </div>
                <div class="col6">
                    <div class="row">
                        <?php echo template::checkbox('themefooterDisplaySiteMap', true, 'Plan du site', [
                                'checked' => $this->getData(['theme', 'footer', 'displaySiteMap']),
                                'help' => 'Un plan du site permet un meilleur référencement.'
                            ]); ?>
                    </div>
                    <div class="row">
                        <?php echo template::checkbox('themeFooterLoginLink', true, 'Lien de connexion', [
                                    'checked' => $this->getData(['theme', 'footer', 'loginLink'])
                                ]); ?>
                    </div>
                    <div class="row">
                       <?php echo template::checkbox('themeFooterDisplaySearch', true, 'Rechercher', [
                                'checked' =>  $this->getData(['theme', 'footer', 'displaySearch']),
                            ]); ?>
                    </div>
                </div>
                <div class="col12">
                    <em>Le paramétrage des mentions légales s'effectue dans la configuration du site.</em>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col12">
        <div class="block">
            <h4>Contenu personnalisé</h4>
            <?php echo template::textarea('themeFooterText', [
					'label' => '<strong>Texte ou HTML personnalisé :</strong>',
					'value' => $this->getData(['theme', 'footer', 'text']),
					'class' => 'editorWysiwyg'
				]); ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col12">
        <div class="block">
            <h4>Mise en forme du texte</h4>
            <div class="row">
                <div class="col3">
                    <?php echo template::select('themeFooterFont', $module::$fonts, [
							'label' => 'Police',
							'selected' => $this->getData(['theme', 'footer', 'font'])
						]); ?>
                </div>
                <div class="col3">
                    <?php echo template::select('themeFooterFontSize', $module::$footerFontSizes, [
							'label' => 'Taille',
							'help' => 'Proportionnelle à celle définie dans le site.',							
							'selected' => $this->getData(['theme', 'footer', 'fontSize'])
						]); ?>
                </div>
                <div class="col3">
                    <?php echo template::select('themeFooterFontWeight', $module::$fontWeights, [
							'label' => 'Style',
							'selected' => $this->getData(['theme', 'footer', 'fontWeight'])
						]); ?>
                </div>
                <div class="col3">
                    <?php echo template::select('themeFooterTextTransform', $module::$textTransforms, [
							'label' => 'Casse',
							'selected' => $this->getData(['theme', 'footer', 'textTransform'])
						]); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col12">
        <div class="block">
            <h4>Configuration</h4>
            <div class="row">
                <div class="col4">
                    <?php 	$footerBlockPosition = $module::$footerblocks [$this->getData(['theme', 'footer', 'template'])]; ?>
                    <?php echo template::select('themeFooterTemplate', $module::$footerTemplate, [
                            'label' => 'Gabarits de mise en page',
                            'selected' => $this->getData(['theme', 'footer', 'template'])
                        ]); ?>
                </div>
                <div class="col4">
                    <?php echo template::select('themeFooterPosition', $module::$footerPositions, [
                            'label' => 'Position',
                            'selected' => $this->getData(['theme', 'footer', 'position'])
                        ]); ?>
                </div>
                <div class="col4">
                    <?php echo template::select('themeFooterHeight', $module::$footerHeights, [
                            'label' => 'Marges verticales',
                            'selected' => $this->getData(['theme', 'footer', 'height']),
                            'help' => 'La hauteur du pied de page est dynmamique selon le contenu.Ces marges sont ajoutées au-dessus et en-dessous.'
                        ]); ?>
                </div>
            </div>
            <div class="row">
                <div class="col4">
                    <p><strong>Contenu personnalisé</strong></p>
                    <?php echo template::select('themeFooterTextPosition', $footerBlockPosition, [
                            'label' => 'Emplacement',
                            'selected' => $this->getData(['theme', 'footer', 'textPosition']),
                            'class' => 'themeFooterContent'
                        ]); ?>
                    <?php echo template::select('themeFooterTextAlign', $module::$aligns, [
                            'label' => 'Alignement',
                            'selected' => $this->getData(['theme', 'footer', 'textAlign'])
                        ]); ?>
                </div>
                <div class="col4">
                    <p><strong>Réseaux sociaux</strong></p>
                    <?php echo template::select('themeFooterSocialsPosition', $footerBlockPosition, [
                            'label' => 'Emplacement',
                            'selected' => $this->getData(['theme', 'footer', 'socialsPosition']),
                            'class' => 'themeFooterContent'
                        ]); ?>
                    <?php echo template::select('themeFooterSocialsAlign', $module::$aligns, [
                            'label' => 'Alignement',
                            'selected' => $this->getData(['theme', 'footer', 'socialsAlign'])
                        ]); ?>
                </div>
                <div class="col4">
                    <p><strong>Info et copyright</strong></p>
                    <?php echo template::select('themeFooterCopyrightPosition', $footerBlockPosition, [
                            'label' => 'Emplacement',
                            'selected' => $this->getData(['theme', 'footer', 'copyrightPosition']),
                            'class' => 'themeFooterContent'
                        ]); ?>
                    <?php echo template::select('themeFooterCopyrightAlign', $module::$aligns, [
                            'label' => 'Alignement',
                            'selected' => $this->getData(['theme', 'footer', 'copyrightAlign'])
                        ]); ?>
                </div>
                <div class="col6">
                    <div id="themeFooterPositionOptions" class="displayNone">
                        <?php echo template::checkbox('themeFooterMargin', true, 'Aligner le bas de page avec le contenu', [
                                'checked' => $this->getData(['theme', 'footer', 'margin'])
                            ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo template::formClose(); ?>
