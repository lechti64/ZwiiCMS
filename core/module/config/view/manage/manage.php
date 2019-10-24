<?php echo template::formOpen('configManageForm'); ?>
	<div class="row">
		<div class="col2">
		<?php echo template::button('configManageBack', [
				'class' => 'buttonGrey',
				'href' => helper::baseUrl() . 'config',
				'ico' => 'left',
				'value' => 'Retour'
			]); ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('configManageSubmit',[
				'value' => 'Enregister'
			]); ?>
		</div>
	</div>
	<div class="row">
		<div class="col6">
			<div class="block">
				<h4>Sauvegarder</h4>											
				<div class="row">
					<div class="col10 offset1">
						<?php echo template::button('configManageButton', [
							'href' => helper::baseUrl() . 'config/backup',
							'value' => 'Exporter une copie du site<br>(données, thème et fichiers)'
						]); ?>
					</div>
				</div>
			</div>				
		</div>	
		<div class="col6">
			<div class="block">
				<h4>Restaurer</h4>
				<div class="row">				
					<?php echo template::file('configManageImportFile', [
						'label' => 'Sauvegarde au format ZIP',
						'type' => 2,
						'help' => 'Importe d\'une archive déposée dans le gestionaire de fichiers.'
					]); ?>
				</div>
				<div class="row">
					<?php echo template::checkbox('configManageImportUser', true, 'Préserver les comptes des utilisateurs déjà installés', [
						'checked' => true
					]); ?>			
				</div>	
							
			</div>				
		</div>		
    </div>
	<div class="row">
		<div class="col12">
			<div class="block">
				<h4>Options</h4>
				<div class="row">
					<?php echo template::checkbox('configExportAutoBackup', true, 'Sauvegarde automatique des données du site', [
						'checked' => $this->getData(['config', 'autoBackup']),
						'help' => 'Le fichier de données est copié quotidiennement dans le dossier \'site/backup\'. La sauvegarde est conservée pendant 30 jours.'
					]); ?>				
					<?php echo template::checkbox('configExportMaintenance', true, 'Site en maintenance', [
						'checked' => $this->getData(['config', 'maintenance'])
					]); ?>	
				</div>
			</div>
		</div>
	</div>
<?php echo template::formClose(); ?>
