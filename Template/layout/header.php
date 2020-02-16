<?php

$_title = $this->render('header/title', [
	'project' => $project ?? null,
	'task' => $task ?? null,
	'description' => $description ?? null,
	'title' => $title,
]);

$_topRightCorner = implode('&nbsp;', [
	$this->render('header/user_notifications'),
	$this->render('header/creation_dropdown'),
	$this->render('header/user_dropdown'),
]);

?>

<!--<header>-->
<!--	<div class="title-container">-->
<!--		-->
<!--	</div>-->
<!--	<div class="board-selector-container">-->
<!--		--><?php //if (!empty($board_selector)): ?>
<!--			--><?//= $this->render('header/board_selector', ['board_selector' => $board_selector]) ?>
<!--		--><?php //endif ?>
<!--	</div>-->
<!--	<div class="menus-container">-->
<!--		--><?//= $_topRightCorner ?>
<!--	</div>-->
<!--</header>-->


<nav class="navbar" role="navigation" aria-label="main navigation">
	<?= $_title ?>

	<div id="topNav" class="navbar-menu">
		<div class="navbar-start">
<!--			<a class="navbar-item">-->
<!--				Home-->
<!--			</a>-->
<!---->
<!--			<a class="navbar-item">-->
<!--				Documentation-->
<!--			</a>-->
<!---->
<!--			<div class="navbar-item has-dropdown is-hoverable">-->
<!--				<a class="navbar-link">-->
<!--					More-->
<!--				</a>-->
<!---->
<!--				<div class="navbar-dropdown">-->
<!--					<a class="navbar-item">-->
<!--						About-->
<!--					</a>-->
<!--					<a class="navbar-item">-->
<!--						Jobs-->
<!--					</a>-->
<!--					<a class="navbar-item">-->
<!--						Contact-->
<!--					</a>-->
<!--					<hr class="navbar-divider">-->
<!--					<a class="navbar-item">-->
<!--						Report an issue-->
<!--					</a>-->
<!--				</div>-->
			</div>
		</div>

		<div class="navbar-end">
			<?= $this->render('header/user_notifications') ?>
			<?= $this->render('header/creation_dropdown') ?>
			<?= $this->render('header/user_dropdown') ?>
<!--			<div class="navbar-item">-->
<!--				<div class="buttons">-->
<!--					<a class="button is-primary">-->
<!--						<strong>Sign up</strong>-->
<!--					</a>-->
<!--					<a class="button is-light">-->
<!--						Log in-->
<!--					</a>-->
<!--				</div>-->
<!--			</div>-->
		</div>
	</div>
</nav>
