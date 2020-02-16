<section id="main">
	<nav class="level" id="page-header">
		<div class="level-left">
			<?php if ($this->user->hasAccess('ProjectCreationController', 'create')): ?>
				<div class="level-item">
					<?= $this->modal->medium('plus', t('New project'), 'ProjectCreationController', 'create') ?>
				</div>
			<?php endif ?>
			<?php if ($this->app->config('disable_private_project', 0) == 0): ?>
				<div class="level-item">
					<?= $this->modal->medium('lock', t('New private project'), 'ProjectCreationController', 'createPrivate') ?>
				</div>
			<?php endif ?>
			<div class="level-item">
				<?= $this->url->icon('folder', t('Project management'), 'ProjectListController', 'show') ?>
			</div>
			<div class="level-item">
				<?= $this->modal->medium('grid', t('My activity stream'), 'ActivityController', 'user') ?>
			</div>
			<?= $this->hook->render('template:dashboard:page-header:menu', ['user' => $user]) ?>
		</div>
	</nav>
	<section id="dashboard">
		<div class="columns">
			<div class="column is-2-widescreen is-3">
				<?= $this->render($sidebar_template, ['user' => $user]) ?>
			</div>
			<div class="column">
				<div class="sidebar-content">
					<?= $content_for_sublayout ?>
				</div>
			</div>
		</div>
	</section>
</section>
