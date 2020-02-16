<div class="navbar-item">
	<?php if (!$this->user->hasNotifications()): ?>
		<?= $this->modal->mediumIcon('bell', t('Unread notifications'), 'WebNotificationController', 'show', ['user_id' => $this->user->getId()], 'has-text-danger') ?>
	<?php else: ?>
		<?= $this->modal->mediumIcon('bell', t('My notifications'), 'WebNotificationController', 'show', ['user_id' => $this->user->getId()]) ?>
	<?php endif ?>
</div>
