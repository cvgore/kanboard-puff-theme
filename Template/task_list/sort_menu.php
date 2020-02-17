<div class="dropdown is-hoverable is-right">
	<div class="dropdown-trigger">
		<a aria-haspopup="true" aria-controls="dropdown-menu">
			<span class="icon">
		        <i class="fi-bar-chart"></i>
	        </span>
		</a>
	</div>
	<div class="dropdown-menu" id="dropdown-menu" role="menu">
		<div class="dropdown-content">
			<div class="dropdown-item">
				<?= $paginator->order(t('Task ID'), \Kanboard\Model\TaskModel::TABLE . '.id') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Swimlane'), 'swimlane_name') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Column'), 'column_name') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Category'), 'category_name') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Priority'), \Kanboard\Model\TaskModel::TABLE . '.priority') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Position'), \Kanboard\Model\TaskModel::TABLE . '.position') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Title'), \Kanboard\Model\TaskModel::TABLE . '.title') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Assignee'), 'assignee_name') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Due date'), \Kanboard\Model\TaskModel::TABLE . '.date_due') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Start date'), \Kanboard\Model\TaskModel::TABLE . '.date_started') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Status'), \Kanboard\Model\TaskModel::TABLE . '.is_active') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Reference'), \Kanboard\Model\TaskModel::TABLE . '.reference') ?>
			</div>
		</div>
	</div>
</div>
