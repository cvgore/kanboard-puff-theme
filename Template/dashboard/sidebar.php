<aside class="menu">
	<ul class="menu-list">
		<li>
			<?= $this->url->link(t('Overview'), 'DashboardController', 'show', ['user_id' => $user['id']], false, $this->app->checkMenuSelectionClass('DashboardController', 'show')) ?>
		</li>
		<li>
			<?= $this->url->link(t('My projects'), 'DashboardController', 'projects', ['user_id' => $user['id']], false, $this->app->checkMenuSelectionClass('DashboardController', 'projects')) ?>
		</li>
		<li>
			<?= $this->url->link(t('My tasks'), 'DashboardController', 'tasks', ['user_id' => $user['id']], false, $this->app->checkMenuSelection('DashboardController', 'tasks')) ?>
		</li>
		<li>
			<?= $this->url->link(t('My subtasks'), 'DashboardController', 'subtasks', ['user_id' => $user['id']], false, $this->app->checkMenuSelection('DashboardController', 'subtasks')) ?>
		</li>
		<?= $this->hook->render('template:dashboard:sidebar', ['user' => $user]) ?>
	</ul>
</aside>
