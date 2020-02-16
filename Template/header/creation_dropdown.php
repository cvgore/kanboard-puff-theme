<?php $has_project_creation_access = $this->user->hasAccess('ProjectCreationController', 'create'); ?>
<?php $is_private_project_enabled = $this->app->config('disable_private_project', 0) == 0; ?>

<?php if ($has_project_creation_access || (!$has_project_creation_access && $is_private_project_enabled)): ?>
	<div class="navbar-item has-dropdown is-hoverable">
		<a href="#" class="navbar-link">
			<?= t('New') ?>
		</a>

		<div class="navbar-dropdown is-right">
			<?php if ($has_project_creation_access): ?>
				<?= $this->modal->medium('plus', t('New project'), 'ProjectCreationController', 'create', [], '', 'navbar-item') ?>
			<?php endif ?>

			<?php if ($is_private_project_enabled): ?>
				<?= $this->modal->medium('lock', t('New private project'), 'ProjectCreationController', 'createPrivate', [], '', 'navbar-item') ?>
			<?php endif ?>
			<?= $this->hook->render('template:header:creation-dropdown') ?>
		</div>
	</div>
<?php endif ?>
