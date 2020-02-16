<!--<h1>-->
<!--    <span class="logo">-->
<!--        --><? //= $this->url->link('K<span>B</span>', 'DashboardController', 'show', array(), false, '', t('Dashboard')) ?>
<!--    </span>-->
<!--    <span class="title">-->
<!--        --><?php //if (! empty($project) && ! empty($task)): ?>
<!--            --><? //= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', array('project_id' => $project['id'])) ?>
<!--        --><?php //else: ?>
<!--            --><? //= $this->text->e($title) ?>
<!--        --><?php //endif ?>
<!--    </span>-->
<!--    --><?php //if (! empty($description)): ?>
<!--        --><? //= $this->app->tooltipHTML($description) ?>
<!--    --><?php //endif ?>
<!--</h1>-->

<div class="navbar-brand">
	<?= $this->url->link('K<span class="has-text-danger">B</span>', 'DashboardController', 'show', [], false, 'navbar-item', t('Dashboard')) ?>

	<?php if (!empty($project) && !empty($task)): ?>
		<?= $this->url->link($this->text->e($project['name']), 'BoardViewController', 'show', ['project_id' => $project['id']], false, 'navbar-item') ?>
	<?php else: ?>
		<span class="navbar-item">
            <?= $this->text->e($title) ?>
        </span>
	<?php endif ?>

	<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
	   data-target="navbarBasicExample">
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
		<span aria-hidden="true"></span>
	</a>
</div>
