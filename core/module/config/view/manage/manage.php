<?php echo template::formOpen('configManageForm'); ?>
<div class="notranslate">	
	<div class="row">
		<div class="col2">
		<?php echo template::button('configManageBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() . 'config',
				'ico' => 'left',
				'value' => 'Retour'
			]); ?>
		</div>
	</div>
	<div class="row">
		<div class="col6">
			<div class="block">
				<h4>Sauvegarde totale du site</h4>	
				<div class="row">
					<div class="col10 offset1">
						<?php echo template::button('configBackupButton', [
							'href' => helper::baseUrl() . 'config/backup',
							'value' => 'Générer et télécharger <br />les données de site',
						]); ?>
					</div>					
				</div>
				<div class="row">
					<div class="col10">
						<?php echo template::checkbox('configBackupOption', true, 'Inclure le contenu du gestionnaire de fichiers', [
							'checked' => true,
							'disabled' => true,
							'help' => 'Cette option n\'est pas recommandée lorsque le contenu du gestionnaire de fichiers est très volumineux.'
						]); ?>		
					</div>	
				</div>
			</div>				
		</div>	
		<div class="col6">
			<div class="block">
				<h4>Restauration ou transfert d'un site</h4>
				<div class="row">		
					<div class="col12">		
						<?php echo template::file('configManageImportFile', [
							'label' => 'Sélectionnez une archive au format ZIP',
							'type' => 2,
							'help' => 'L\'archive a été déposée dans le gestionaire de fichiers. Les archives inférieures à la version 9 ne sont pas acceptées.'
						]); ?>
					</div>
				</div>			
				<div class="row">
					<div class="col8">
						<?php echo template::checkbox('configManageImportUser', true, 'Préserver utilisateurs installés', [
							'checked' => true,
							'help' => 'Les données des utilisateurs installés ne sont pas écrasés par la restauration quand l\'option est active.'
						]); ?>		
					</div>	
					<div class="col4">
						<?php echo template::submit('configManageSubmit',[
							'value' => 'Restaurer'
						]); ?>
					</div>
				</div>			
			</div>
		</div>		
	</div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Conversion des URL après transfert de site</h4>
				<div class="row">
					<div class="col5">
						<?php 
						if (is_null($this->getData(['core', 'baseUrl'])) ) {
							$baseUrlValue = 'Pas de donnée dans la sauvegarde';
							$buttonClass = 'disabled'; 
						} elseif ($this->getData(['core', 'baseUrl']) === '') {
							$baseUrlValue = '/';
							$buttonClass = (helper::baseUrl(true,false) !== $this->getData(['core', 'baseUrl']) ) ? '' : 'disabled';
						} else {
							$baseUrlValue = $this->getData(['core', 'baseUrl']);
							$buttonClass = (helper::baseUrl(true,false) !== $this->getData(['core', 'baseUrl']) ) ? '' : 'disabled';
						}
						echo template::text('configManageBaseURLToConvert', [
							'label' => 'Dossier d\'installation de l\'archive' ,
							'value' => $baseUrlValue,
							'readonly' => true,
							'help'  => 'Lors de la restauration d\'un backup d\'une version 9.2.10 ou supérieure, l\'URL de base est stockée dans la configuration sinon cette donnée est vide.'
						]); ?>
					</div>
					<div class="col5">
						<?php echo template::text('configManageCurrentURL', [
							'label' => 'Dossier du site actuel',
							'value' => helper::baseUrl(true,false),
							'readonly' => true,
							'help'  => 'Dossier du site installé.'
						]); ?>
					</div>			
					<div class="col2 verticalAlignBottom">
						<?php echo template::button('configManageUpdateBaseURLButton', [
							'href' => helper::baseUrl() . 'config/updateBaseUrl',
							'class' => $buttonClass,
							'value' => 'convertir'
						]); ?>						
					</div>		
				</div>
			</div>
		</div>
	</div>
</div>
<?php echo template::formClose(); ?>
