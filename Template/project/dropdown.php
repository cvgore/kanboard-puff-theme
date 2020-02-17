<div class="dropdown is-hoverable">
    <div class="dropdown-trigger">
        <a href="#" class="tag is-entry">
            #<?= $project['id'] ?>
        </a>
        <div class="dropdown-menu" id="dropdown-menu" role="menu">
            <div class="dropdown-content">
				<?= $this->url->icon('columns', t('Board'), 'BoardViewController', 'show', ['project_id' => $project['id']], false, 'dropdown-item') ?>
				<?= $this->url->icon('list', t('Listing'), 'TaskListController', 'show', ['project_id' => $project['id']], false, 'dropdown-item') ?>
				<?= $this->modal->medium('activity', t('Activity'), 'ActivityController', 'project', ['project_id' => $project['id']], false, 'dropdown-item') ?>

				<?php if ($this->user->hasProjectAccess('AnalyticController', 'taskDistribution', $project['id'])): ?>
					<?= $this->modal->large('pie-chart', t('Analytics'), 'AnalyticController', 'taskDistribution', ['project_id' => $project['id']], 'dropdown-item') ?>
				<?php endif ?>

				<?= $this->hook->render('template:project:dropdown', ['project' => $project]) ?>

				<?php if ($this->user->hasProjectAccess('ProjectEditController', 'show', $project['id'])): ?>
					<?= $this->url->icon('sliders', t('Configure this project'), 'ProjectViewController', 'show', ['project_id' => $project['id']], false, 'dropdown-item') ?>
				<?php endif ?>
            </div>
        </div>
    </div>
</div>
