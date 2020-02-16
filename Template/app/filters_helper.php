<?= $this->hook->render('template:app:filters-helper:before', isset($project) ? array('project' => $project) : array()) ?>
<div class="dropdown is-hoverable is-right">
	<div class="dropdown-trigger">
		<button class="button is-small" aria-haspopup="true" aria-controls="dropdown-menu" title="<?= t('Default filters') ?>">
            <span class="icon is-small">
                <i class="fi-filter"></i>
            </span>
		</button>
	</div>
	<div class="dropdown-menu" id="dropdown-menu" role="menu">
		<div class="dropdown-content">
			<a href="#" class="filter-helper filter-reset dropdown-item" data-filter="<?= $reset ?? '' ?>" title="<?= t('Keyboard shortcut: "%s"', 'r') ?>"><?= t('Reset filters') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open assignee:me"><?= t('My tasks') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open assignee:me due:tomorrow"><?= t('My tasks due tomorrow') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open due:today"><?= t('Tasks due today') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open due:tomorrow"><?= t('Tasks due tomorrow') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open due:yesterday"><?= t('Tasks due yesterday') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:closed"><?= t('Closed tasks') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open"><?= t('Open tasks') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open assignee:nobody"><?= t('Not assigned') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open assignee:anybody"><?= t('Assigned') ?></a>
			<a href="#" class="filter-helper dropdown-item" data-filter="status:open category:none"><?= t('No category') ?></a>
			<!--            #TODO - doc url generation -->
			<!--            <li>-->
			<!--		        --><?//= $this->url->doc(t('View advanced search syntax'), 'search') ?>
			<!--            </li>-->
		</div>
	</div>
</div>
<?= $this->hook->render('template:app:filters-helper:after', isset($project) ? array('project' => $project) : array()) ?>
