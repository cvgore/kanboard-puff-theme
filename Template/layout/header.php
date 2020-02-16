<?php
$_title = $this->render('header/title', [
	'project' => $project ?? null,
	'task' => $task ?? null,
	'description' => $description ?? null,
	'title' => $title,
]);
?>

<nav class="navbar" role="navigation" aria-label="main navigation">
	<?= $_title ?>

	<div id="topNav" class="navbar-menu">
		<div class="navbar-start">
			<div class="navbar-item board-selector-container">
				<?php if (!empty($board_selector)): ?>
					<?= $this->render('header/board_selector', ['board_selector' => $board_selector]) ?>
				<?php endif ?>
			</div>
		</div>

		<div class="navbar-end">
			<?= $this->render('header/user_notifications') ?>
			<?= $this->render('header/creation_dropdown') ?>
			<?= $this->render('header/user_dropdown') ?>
		</div>
	</div>
</nav>
