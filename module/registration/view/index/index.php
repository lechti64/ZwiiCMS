<?php echo template::formOpen('registrationAddForm'); ?>
	<?php if ($this->getUser('group') === self::GROUP_ADMIN): ?>		
	<div class="row">
		<div class="col2 offset8">
			<?php
			if (array_search($module::STATUS_AWAITING,helper::arrayCollumn($this->getData(['user']), 'group')) !== false ||
				array_search($module::STATUS_VALIDATED,helper::arrayCollumn($this->getData(['user']), 'group')) !== false ): ?>
					<?php echo template::button ('registrateButtonUser', [
							'href' => helper::baseUrl() . $this->getUrl() . '/user',
							'value' => 'Inscriptions'
						]); ?>
			<?php endif; ?>
		</div>
		<div class="col2">
			<?php echo template::button ('registrateButtonConfig', [
					'href' => helper::baseUrl() . $this->getUrl() .  '/config',
					'value' => 'Configurer'
				]); ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="row">
		<div class="col8 offset2">
			<div class="row">
				<div class="col6">
					<?php echo template::text('registrationAddFirstname', [
						'autocomplete' => 'off',
						'label' => 'Prénom'
					]); ?>
				</div>
				<div class="col6">
					<?php echo template::text('registrationAddLastname', [
						'autocomplete' => 'off',
						'label' => 'Nom'
					]); ?>
				</div>
			</div>
			<div class="row">
				<div class="col12">
				<?php echo template::mail('registrationAddMail', [
					'autocomplete' => 'off',
					'label' => 'Adresse mail'
				]); ?>
			</div>
		</div>
		<div class="row">
			<div class="col12">
				<?php echo template::hidden('registrationAddGroup', [
					'value' => self::GROUP_MEMBER
				]); ?>
			</div>
		</div>
		<div class="row">
			<div class="col12">
				<?php echo template::text('registrationAddId', [
					'autocomplete' => 'off',
					'label' => 'Identifiant'
				]); ?>
			</div>
		</div>
		<div class="row">
			<div class="col12">
				<?php echo template::password('registrationAddPassword', [
					'autocomplete' => 'off',
					'label' => 'Mot de passe'
				]); ?>
			</div>
		</div>
		<div class="row">
			<div class="col12">
				<?php echo template::password('registrationAddConfirmPassword', [
					'autocomplete' => 'off',
					'label' => 'Confirmation'
				]);
				?>
			</div>
		</div>
		<div class="row">
			<div class="col12">
				<?php echo template::hidden('registrationAddTimer', [
					'value' => time()
				]);
				?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col2 offset8">
			<?php echo template::submit('registrationAddSubmit', [
				'value' => 'Envoyer'
			]); ?>
		</div>
	</div>
<?php echo template::formClose(); ?>
