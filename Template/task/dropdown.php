<div class="dropdown is-hoverable">
	<div class="dropdown-trigger">
		<a href="#" class="tag is-entry">
			#<?= $task['id'] ?>
		</a>
	</div>
	<div class="dropdown-menu" id="dropdown-menu" role="menu">
		<div class="dropdown-content">
			<?php if ($this->projectRole->canUpdateTask($task)): ?>
				<?php if ($this->projectRole->canChangeAssignee($task) && array_key_exists('owner_id', $task) && $task['owner_id'] != $this->user->getId()): ?>
					<div class="dropdown-item">
						<?= $this->url->icon('hand-o-right', t('Assign to me'), 'TaskModificationController', 'assignToMe', [
							'task_id' => $task['id'],
							'project_id' => $task['project_id'],
							'redirect' => $redirect ?? '',
						], false, 'dropdown-item') ?>
					</div>
				<?php endif ?>
				<?php if (array_key_exists('date_started', $task) && empty($task['date_started'])): ?>
					<?= $this->url->icon('play', t('Set the start date automatically'), 'TaskModificationController', 'start', [
						'task_id' => $task['id'],
						'project_id' => $task['project_id'],
						'redirect' => $redirect ?? '',
					], false, 'dropdown-item') ?>
				<?php endif ?>
				<?= $this->modal->large('edit', t('Edit the task'), 'TaskModificationController', 'edit', [
					'task_id' => $task['id'],
					'project_id' => $task['project_id'],
				], 'dropdown-item') ?>
			<?php endif ?>
			<?= $this->modal->medium('plus-circle', t('Add a sub-task'), 'SubtaskController', 'create', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], '', 'dropdown-item') ?>
			<?= $this->modal->medium('link-2', t('Add internal link'), 'TaskInternalLinkController', 'create', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], '', 'dropdown-item') ?>
			<?= $this->modal->medium('external-link', t('Add external link'), 'TaskExternalLinkController', 'find', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], '', 'dropdown-item') ?>
			<?= $this->modal->small('message-circle', t('Add a comment'), 'CommentController', 'create', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], 'dropdown-item') ?>
			<?= $this->modal->medium('file', t('Attach a document'), 'TaskFileController', 'create', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], '', 'dropdown-item') ?>
			<?= $this->modal->medium('camera', t('Add a screenshot'), 'TaskPopoverController', 'screenshot', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], '', 'dropdown-item') ?>
			<?= $this->modal->small('copy', t('Duplicate'), 'TaskDuplicationController', 'duplicate', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], 'dropdown-item') ?>
			<?= $this->modal->small('clipboard', t('Duplicate to another project'), 'TaskDuplicationController', 'copy', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], 'dropdown-item') ?>
			<?= $this->modal->small('move', t('Move to another project'), 'TaskDuplicationController', 'move', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], 'dropdown-item') ?>
			<?= $this->modal->small('mail', t('Send by email'), 'TaskMailController', 'create', [
				'task_id' => $task['id'],
				'project_id' => $task['project_id'],
			], 'dropdown-item') ?>
			<?php if ($this->projectRole->canRemoveTask($task)): ?>
				<?= $this->modal->confirm('trash', t('Remove'), 'TaskSuppressionController', 'confirm', [
					'task_id' => $task['id'],
					'project_id' => $task['project_id'],
				], 'dropdown-item') ?>
			<?php endif ?>
			<?php if (isset($task['is_active']) && $this->projectRole->canChangeTaskStatusInColumn($task['project_id'], $task['column_id'])): ?>
				<?php if ($task['is_active'] == 1): ?>
					<?= $this->modal->confirm('x-circle', t('Close this task'), 'TaskStatusController', 'close', [
						'task_id' => $task['id'],
						'project_id' => $task['project_id'],
					], 'dropdown-item') ?>
				<?php else: ?>
					<?= $this->modal->confirm('check-circle', t('Open this task'), 'TaskStatusController', 'open', [
						'task_id' => $task['id'],
						'project_id' => $task['project_id'],
					], '', 'dropdown-item') ?>
				<?php endif ?>
			<?php endif ?>

			<?= $this->hook->render('template:task:dropdown', ['task' => $task]) ?>
		</div>
	</div>
</div>
