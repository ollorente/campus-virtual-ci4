<div class="btn-group" role="group" aria-label="<?php echo lang('Pager.pageNavigation') ?>">
    <?php if ($pager->hasPreviousPage()) : ?>
        <a href="<?php echo $pager->getPreviousPage() ?>" type="button" class="btn btn--azul">Atrás</a>
    <?php endif ?>

    <?php foreach ($pager->links() as $link) : ?>
        <a href="<?php echo $link['uri'] ?>" type="button" class="btn btn--azul"><?php echo $link['title'] ?></a>
        <?php endforeach ?>

    <?php if ($pager->hasNextPage()) : ?>
        <a href="<?php echo $pager->getNextPage() ?>" type="button" class="btn btn--azul">Siguiente</a>
    <?php endif ?>
</div>