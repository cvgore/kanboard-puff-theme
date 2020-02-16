<div class="navbar-item has-dropdown is-hoverable">
	<a href="#" class="navbar-link">
		<?= $this->avatar->currentUserSmall('avatar-inline') ?>
	</a>
	<div class="navbar-dropdown is-right">
		<div class="navbar-item avatar-inline"><?= $this->text->e($this->user->getFullname()) ?></div>
		<?= $this->url->icon('list', t('My dashboard'), 'DashboardController', 'show', ['user_id' => $this->user->getId()], false, 'navbar-item') ?>
		<?= $this->url->icon('home', t('My profile'), 'UserViewController', 'show', ['user_id' => $this->user->getId()], false, 'navbar-item') ?>
		<?= $this->url->icon('folder', t('Projects management'), 'ProjectListController', 'show', [], false, 'navbar-item') ?>
		<?php if ($this->user->hasAccess('UserListController', 'show')): ?>
			<?= $this->url->icon('user', t('Users management'), 'UserListController', 'show', [], false, 'navbar-item') ?>
			<?= $this->url->icon('users', t('Groups management'), 'GroupListController', 'index', [], false, 'navbar-item') ?>
			<?= $this->url->icon('grid', t('Plugins'), 'PluginController', 'show', [], false, 'navbar-item') ?>
			<?= $this->url->icon('settings', t('Settings'), 'ConfigController', 'index', [], false, 'navbar-item') ?>
		<?php endif ?>

		<?= $this->hook->render('template:header:dropdown') ?>

<!--		<li>-->
<!--			<i class="fi-save" aria-hidden="true"></i>-->
<!--			--><?//= $this->url->doc(t('Documentation'), 'index') ?>
<!--		</li>-->
		<?php if (!DISABLE_LOGOUT): ?>
			<?= $this->url->icon('log-out', t('Logout'), 'AuthController', 'logout', [], false, 'navbar-item') ?>
		<?php endif ?>
	</div>
</div>
