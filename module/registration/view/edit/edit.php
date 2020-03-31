<?php echo template::formOpen('registrationUserEditForm'); ?>
	<div class="row">
		<div class="col2">
			<?php if($this->getUrl(3)): ?>
				<?php echo template::button('registrationUserEditBack', [
					'class' => 'buttonGrey',
					'href' => helper::baseUrl() . 'user',
					'ico' => 'left',
					'value' => 'Retour'
				]); ?>
			<?php else: ?>
				<?php echo template::button('registrationUserEditBack', [
					'class' => 'buttonGrey',
					'href' => helper::baseUrl(false),
					'ico' => 'home',
					'value' => 'Accueil'
				]); ?>
			<?php endif; ?>
		</div>
		<div class="col2 offset8">
			<?php echo template::submit('registrationUserEditSubmit'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col6 offset3">
			<div class="block">
				<h4>Informations générales</h4>
				<div class="row">
					<div class="col6">
						<?php echo template::text('registrationUserEditFirstname', [
							'autocomplete' => 'off',
							'label' => 'Prénom',
							'value' => $this->getData(['user', $this->getUrl(2), 'firstname']),
							'disabled'=> true
						]); ?>
					</div>
					<div class="col6">
						<?php echo template::text('registrationUserEditLastname', [
							'autocomplete' => 'off',
							'label' => 'Nom',
							'value' => $this->getData(['user', $this->getUrl(2), 'lastname']),
							'disabled'=> true
						]); ?>
					</div>
				</div>
				<?php echo template::mail('registrationUserEditMail', [
					'autocomplete' => 'off',
					'label' => 'Adresse mail',
					'value' => $this->getData(['user', $this->getUrl(2), 'mail']),
					'disabled'=> true
				]); ?>
				<?php $groups = array_merge ( $module::$statusGroups , self::$groupEdits); ?>
				<?php if($this->getUser('group') === self::GROUP_ADMIN): ?>
					<?php echo template::select('registrationUserEditGroup', $groups, [
						'disabled' => ($this->getUrl(2) === $this->getUser('id')),
						'help' => ($this->getUrl(2) === $this->getUser('id') ? 'Impossible de modifier votre propre groupe.' : ''),
						'label' => 'Groupe',
						'selected' => $groups[$this->getData(['user', $this->getUrl(2), 'group'])]
					]); ?>
					Autorisations :
					<ul id="registrationUserEditGroupDescription<?php echo self::GROUP_MEMBER; ?>" class="registrationUserEditGroupDescription displayNone">
						<li>Accès aux pages privées membres</li>
					</ul>
					<ul id="registrationUserEditGroupDescription<?php echo self::GROUP_MODERATOR; ?>" class="registrationUserEditGroupDescription displayNone">
						<li>Accès aux pages privées membres et éditeurs</li>
						<li>Ajout / Édition / Suppression de pages</li>
						<li>Ajout / Édition / Suppression de fichiers</li>
					</ul>
					<ul id="registrationUserEditGroupDescription<?php echo self::GROUP_ADMIN; ?>" class="registrationUserEditGroupDescription displayNone">
						<li>Accès à toutes les pages privées</li>
						<li>Ajout / Édition / Suppression de pages</li>
						<li>Ajout / Édition / Suppression de fichiers</li>
						<li>Ajout / Édition / Suppression d'utilisateurs</li>
						<li>Configuration du site</li>
						<li>Personnalisation du thème</li>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php echo template::formClose(); ?>