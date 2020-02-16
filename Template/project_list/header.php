<div class="is-clearfix">
    <?php if ($paginator->getTotal() > 1): ?>
        <?= t('%d projects', $paginator->getTotal()) ?>
    <?php else: ?>
        <?= t('%d project', $paginator->getTotal()) ?>
    <?php endif ?>
	<div class="is-pulled-right">
		<?= $this->render('project_list/sort_menu', array('paginator' => $paginator)) ?>
	</div>
</div>
