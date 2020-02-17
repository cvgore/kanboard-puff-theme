<?php if (!$project_paginator->isEmpty()): ?>
	<nav class="panel">
		<div class="panel-heading">
			<?= $this->render('project_list/header', ['paginator' => $project_paginator]) ?>
		</div>
		<div class="panel-block">
			<form method="get" action="<?= $this->url->dir() ?>" class="search">
				<?= $this->form->hidden('controller', ['controller' => 'SearchController']) ?>
				<?= $this->form->hidden('action', ['action' => 'index']) ?>

				<div class="field has-addons">
					<div class="control is-expanded">
						<?= $this->form->text('search', [], [], ['placeholder="' . t('Search') . '"'], 'input is-small') ?>
					</div>
					<div class="control">
						<?= $this->render('app/filters_helper') ?>
					</div>
				</div>
			</form>
		</div>
		<?php foreach ($project_paginator->getCollection() as $project): ?>
			<div class="panel-block">
				<div class="columns is-multiline is-gapless">
					<div class="column is-12">
						<?php if ($this->user->hasProjectAccess('ProjectViewController', 'show', $project['id'])): ?>
							<?= $this->render('project/dropdown', ['project' => $project]) ?>
						<?php else: ?>
							<b><?= '#' . $project['id'] ?></b>
						<?php endif ?>

						<a href="<?= $this->url->href('BoardViewController', 'show', ['project_id' => $project['id']]) ?>">
							<?= $this->text->e($project['name']) ?>
						</a>

						<?php if (!$project['is_private']): ?>
							<span class="icon is-small">
								<i class="fi-lock fi-inline" title="<?= t('Private project') ?>"></i>
							</span>
						<?php endif ?>
					</div>
					<div class="column is-12">
						<small>
							<?php foreach ($project['columns'] as $column): ?>
								<strong title="<?= t('Task count') ?>"><?= $column['nb_open_tasks'] ?></strong>
								<small><?= $this->text->e($column['title']) ?></small>
							<?php endforeach ?>
						</small>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		<?php if (!$project_paginator->hasNothingToShow()): ?>
			<div class="panel-block">
				<?= $project_paginator ?>
			</div>
		<?php endif ?>
	</nav>
<?php endif ?>

<?php if (empty($overview_paginator)): ?>
	<p class="notification is-warning"><?= t('There is nothing assigned to you.') ?></p>
<?php else: ?>
	<?php foreach ($overview_paginator as $result): ?>
		<div class="panel">
		<?php if (!$result['paginator']->isEmpty()): ?>
			<div class="panel-heading">
				<h6 id="project-tasks-<?= $result['project_id'] ?>" class="title is-5">
					<?= $this->url->link($this->text->e($result['project_name']), 'BoardViewController', 'show', ['project_id' => $result['project_id']]) ?>
				</h6>
			</div>
			<?= $this->render('task_list/header', [
				'paginator' => $result['paginator'],
			]) ?>



			<?php foreach ($result['paginator']->getCollection() as $task): ?>
				<div class="panel-block color-<?= $task['color_id'] ?>">
					<?= $this->render('task_list/task_title', [
						'task' => $task,
						'redirect' => 'dashboard',
					]) ?>

					<?= $this->render('task_list/task_details', [
						'task' => $task,
					]) ?>

					<?= $this->render('task_list/task_avatars', [
						'task' => $task,
					]) ?>

					<?= $this->render('task_list/task_icons', [
						'task' => $task,
					]) ?>

					<?= $this->render('task_list/task_subtasks', [
						'task' => $task,
						'user_id' => $user['id'],
					]) ?>

					<?= $this->hook->render('template:dashboard:task:footer', ['task' => $task]) ?>
				</div>
			<?php endforeach ?>
			</div>

			<?= $result['paginator'] ?>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>

<?= $this->hook->render('template:dashboard:show', ['user' => $user]) ?>
