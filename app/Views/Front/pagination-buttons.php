<div class="btn-group" role="group" aria-label="<?php echo lang('Pager.pageNavigation') ?>">
    <?php if ($pager->hasPreviousPage()) : ?>
        <a href="<?php echo $pager->getPreviousPage() ?>" type="button" class="btn btn--azul"><i class="fas fa-angle-double-left"></i></a>
    <?php endif ?>

    <?php foreach ($pager->setSurroundCount(2)->links() as $link) : ?>
        <a href="<?php echo $link['uri'] ?>" type="button" class="btn btn--azul <?php if ($link['active']) { echo 'disbled'; } else { echo ''; } ?>"><?php echo $link['title'] ?></a>
    <?php endforeach ?>

    <?php if ($pager->hasNextPage()) : ?>
        <a href="<?php echo $pager->getNextPage() ?>" type="button" class="btn btn--azul"><i class="fas fa-angle-double-right"></i></a>
    <?php endif ?>
</div>