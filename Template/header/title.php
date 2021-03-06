<div class="navbar-brand">
	<?= $this->url->link('<img class="image" src="assets/img/icon.svg" width="20">', 'DashboardController', 'show', [], false, 'navbar-item', t('Dashboard')) ?>

	<?php if (!empty($project) && !empty($task)): ?>
		<?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', ['project_id' => $project['id']], false, 'navbar-item') ?>
	<?php else: ?>
		<span class="navbar-item">
            <?= $this->text->e($title) ?>
        </span>
	<?php endif ?>
	<?php if (!empty($description)): ?>
		<span class="navbar-item">
			<?= $this->app->tooltipHTML($description) ?>
		</span>
	<?php endif ?>

	<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
	   data-target="navbarBasicExample">
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
	</a>
</div>
