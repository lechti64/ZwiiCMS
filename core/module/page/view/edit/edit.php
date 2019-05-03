<?php
// Mise à jour de la liste des pages pour TinyMCE
$this->pages2Json();
?>
<?php echo template::formOpen('pageEditForm'); ?>
	<div class="row">
	<div class="col2">
			<?php $href = helper::baseUrl() . $this->getUrl(2); ?>
      <?php if ($this->getData(['page', $this->getUrl(2), 'moduleId']) === 'redirection' || 'code')$href = helper::baseUrl(); ?>
			<?php echo template::button('pageEditBack', [
				'class' => 'buttonGrey',
				'href' => $href,
				'ico' => 'left',
				'value' => 'Retour'
			]); ?>
		</div>
		<div class="col2 offset6">
			<?php echo template::button('pageEditDelete', [
				'class' => 'buttonRed',
				'href' => helper::baseUrl() . 'page/delete/' . $this->getUrl(2) . '&csrf=' . $_SESSION['csrf'],
				'value' => 'Supprimer',
				'ico' => 'cancel'
			]); ?>
		</div>
		<div class="col2">
			<?php echo template::submit('pageEditSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Informations générales</h4>
				<div class="row">
					<div class="col6">
						<?php echo template::text('pageEditTitle', [
							'label' => 'Titre',
							'value' => $this->getData(['page', $this->getUrl(2), 'title'])
						]); ?>
					</div>
					<div class="col6">
						<div class="row">
							<div class="col10">
								<?php echo template::hidden('pageEditModuleRedirect'); ?>
								<?php echo template::select('pageEditModuleId', $module::$moduleIds, [
									'help' => 'En cas de changement de module, les données du module précédent seront supprimées.',
									'label' => 'Module',
									'selected' => $this->getData(['page', $this->getUrl(2), 'moduleId'])
								]); ?>
							</div>
							<div class="col2 verticalAlignBottom">
								<?php echo template::button('pageEditModuleConfig', [
									'disabled' => (bool) $this->getData(['page', $this->getUrl(2), 'moduleId']) === false,
									'uniqueSubmission' => true,	
									'value' => template::ico('gear')
								]); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col6">							
						<?php echo template::select('pageTypeMenu', $module::$typeMenu,[
								'help' => 'Choisissez une icône ou une image de petite taille.',
								'label' => 'Aspect du menu',
								'selected' => $this->getData(['page', $this->getUrl(2), 'typeMenu'])
						]); ?>
					</div>
					<div class="col6">			
					<?php echo template::select('configModulePosition', $module::$modulePosition,[
							'help' => 'En position libre ajoutez le module en plaçant deux crochets [] à l\'endroit voulu dans votre page.',
							'label' => 'Position du module dans la page',
							'selected' => $this->getData(['page', $this->getUrl(2), 'modulePosition'])
						]); ?>
					</div>
				</div>
				<div class="row">
>					<div class="col6">
						<?php echo template::file('pageIconUrl', [
							'label' => 'Icône du menu',
							'value' => $this->getData(['page', $this->getUrl(2), 'iconUrl'])
						]); ?>
					</div>				
				</div>				
			</div>
		</div>
	</div>
	<?php echo template::textarea('pageEditContent', [
		'class' => 'editorWysiwyg',
		'value' => $this->getData(['page', $this->getUrl(2), 'content'])
	]); ?>
	<div class="row">
		<div class="col6">
			<div class="block">
				<h4>Mise en page</h4>
				<?php echo template::select('pageEditBlock', $module::$pageBlocks, [
						'label' => 'Gabarits de page / Barre latérale',
						'help' => 'Pour définir la page comme barre latérale, choisissez l\'option dans la liste.',
						'selected' => $this->getData(['page', $this->getUrl(2) , 'block'])
				]); ?>				
			<!-- Sélection des barres latérales	 -->
			<?php if($this->getHierarchy($this->getUrl(2),false,true)): ?>
					<?php echo template::hidden('pageEditBarLeft', [
						'value' => $this->getData(['page', $this->getUrl(2), 'barLeft'])
					]); ?>
				<?php else: ?>
					<?php echo template::select('pageEditBarLeft', $module::$pagesBarId, [
						'label' => 'Barre latérale gauche :',
						'selected' => $this->getData(['page', $this->getUrl(2), 'barLeft'])
					]); ?>
				<?php endif; ?>
				<?php if($this->getHierarchy($this->getUrl(2),false,true)): ?>
					<?php echo template::hidden('pageEditBarRight', [
						'value' => $this->getData(['page', $this->getUrl(2), 'barRight'])
					]); ?>
				<?php else: ?>
					<?php echo template::select('pageEditBarRight', $module::$pagesBarId, [
						'label' => 'Barre latérale droite :',
						'selected' => $this->getData(['page', $this->getUrl(2), 'barRight'])
					]); ?>
				<?php endif; ?>				
				<div  class="row"> 					
						<div class="col12">
						<?php echo template::select('pageEditDisplayMenu', $module::$displayMenu, [
							'label' => 'Configuration du menu vertical',
							'selected' => $this->getData(['page', $this->getUrl(2), 'displayMenu']),
							'help' => 'Par défaut le menu est affiché APRES le contenu de la page. Pour le placer à un emplacement précis, y insérez [] (deux crochets).'
						]); ?>
					</div>
				</div>				
				<div class="row">
					<div class="col6">
						<?php echo template::checkbox('pageEditHideTitle', true, 'Titre masquée', [
							'checked' => $this->getData(['page', $this->getUrl(2), 'hideTitle'])
						]); ?>
					</div>
					<div class="col6">
						<?php echo template::checkbox('pageEditbreadCrumb', true, 'Fil d\'Ariane', [
							'checked' => $this->getData(['page', $this->getUrl(2), 'breadCrumb'])
						]); ?>
					</div>
				</div>	
			</div>		
		</div>
		<div class="col6">
		<div class="block" id="PageEditMenu">
				<h4>Emplacements</h4>
				<?php if($this->getHierarchy($this->getUrl(2), false)): ?>
					<?php echo template::hidden('pageEditParentPageId', [
						'value' => $this->getData(['page', $this->getUrl(2), 'parentPageId'])
					]); ?>
				<?php else: ?>
					<?php echo template::select('pageEditParentPageId', $module::$pagesNoParentId, [
						'label' => 'Page parent',
						'selected' => $this->getData(['page', $this->getUrl(2), 'parentPageId'])
					]); ?>
				<?php endif; ?>
				<?php echo template::select('pageEditPosition', [], [
					'label' => 'Position',
					'help' => 'Une page non affichée n\'apparaît pas dans les menus mais comme \'Page orpheline\' dans la liste des pages.'
				]); ?>									
				<div class="row">
					<div class="col6">
						<?php echo template::checkbox('pageEditTargetBlank', true, 'Nouvel onglet', [
							'checked' => $this->getData(['page', $this->getUrl(2), 'targetBlank'])
						]); ?>
					</div>					
					<div class="col6">
						<?php echo template::checkbox('pageEditDisable', true, 'Désactivée', [
							'checked' => $this->getData(['page', $this->getUrl(2), 'disable']),			
							'help' => 'Une page désactivée figure dans le menu sans être cliquable.'
						]); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col12">
			<div class="block" id="PageEditMenuSpecial">
			<h4>Options avancées d'emplacements</h4>	
				<div class="row">
					<div class="col12">
					<?php echo template::checkbox('pageEditHideMenuChildren', true, 'Masquer les pages enfants de cette page dans le menu principal', [
						'checked' => $this->getData(['page', $this->getUrl(2), 'hideMenuChildren']),
						'help' => 'Utilisez cette option pour afficher uniquement les pages enfants dans un `sous-menu de page parente` placé dans une barre latérale.'
					]); ?>
					</div>
				</div>									
				<div class="row">
					<div class="col12">
					<?php echo template::checkbox('pageEditHideMenuHead', true, 'Masquer cette page dans le menu principal, l\'afficher dans le menu d\'une barre latérale', [
						'checked' => $this->getData(['page', $this->getUrl(2), 'hideMenuHead']),
						'help' => 'Pour masquer la page totalement (ex : page en construction), dans `Position`, sélectionnez `Ne pas afficher`.'
					]); ?>
					</div>
				</div>
				<div class="row">
					<div class="col12">
					<?php echo template::checkbox('pageEditHideMenuSide', true, 'Masquer cette page dans le menu d`une barre latérale, l\'afficher dans le menu principal', [
						'checked' => $this->getData(['page', $this->getUrl(2), 'hideMenuSide']),
						'help' => 'Pour masquer la page totalement (ex : page en construction), dans `Position`, sélectionnez `Ne pas afficher`.'
					]); ?>
					</div>
				</div>	
			</div>
		</div>					
	</div>
	<div class='row'>
		<div class="block">
					<h4>Autres options</h4>
					<div class='col6'>
						<?php echo template::select('pageEditGroup', self::$groupPublics, [
							'label' => 'Groupe requis pour accéder à la page :',
							'selected' => $this->getData(['page', $this->getUrl(2), 'group'])
						]); ?>
					</div>
					<div class='col12'>
						<?php echo template::text('pageEditMetaTitle', [
							'label' => 'Méta-titre',
							'value' => $this->getData(['page', $this->getUrl(2), 'metaTitle'])
						]); ?>
						<?php echo template::textarea('pageEditMetaDescription', [
							'label' => 'Méta-description',
							'maxlength' => '500',
							'value' => $this->getData(['page', $this->getUrl(2), 'metaDescription'])
						]); ?>
					</div>						
		</div>
	</div>
<?php echo template::formClose(); ?>
