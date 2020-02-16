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
				<?= $paginator->order(t('Project ID'), \Kanboard\Model\ProjectModel::TABLE . '.id') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Project name'), \Kanboard\Model\ProjectModel::TABLE . '.name') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Status'), \Kanboard\Model\ProjectModel::TABLE . '.is_active') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Start date'), \Kanboard\Model\ProjectModel::TABLE . '.start_date') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('End date'), \Kanboard\Model\ProjectModel::TABLE . '.end_date') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Public'), \Kanboard\Model\ProjectModel::TABLE . '.is_public') ?>
			</div>
			<div class="dropdown-item">
				<?= $paginator->order(t('Private'), \Kanboard\Model\ProjectModel::TABLE . '.is_private') ?>
			</div>
		</div>
	</div>
</div>
