<?php echo $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Home
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<main id="main" class="main d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
                <a href="<?php echo base_url(route_to('about')) ?>" class="cursor-pointer">
                    <div class="card mb-3 --border-0 --shadow width-card mx-auto">
                        <h2 class="card__label bg--azul text--blanco --shadow small" style="font-family: 'arial', san-serif;">¿Quiénes somos?</h2>
                        <div class="card__label__detalle bg--azul"></div>
                        <div class="p-1"></div>
                    </div>
                </a>
            </div>
            <div class="w-100"></div>
            <?php if ($roles) { ?>
                <?php foreach ($roles as $item) { ?>
                    <?php
                    switch ($item->roleNameUrl) {
                        case 'aspirante':
                            $text = 'text--blanco';
                            $bg = 'bg--azul';
                            $link_bg = 'btn--cielo';
                            break;
                        case 'estudiante':
                            $text = 'text--azul';
                            $bg = 'bg--amarillo';
                            $link_bg = 'btn--ocre';
                            break;
                        case 'docente':
                            $text = 'text--blanco';
                            $bg = 'bg--naranja';
                            $link_bg = 'btn--amarillo';
                            break;
                    }
                    ?>
                    <div class="col icono-espacio">
                        <a href="#" class="cursor-pointer" data-toggle="modal" data-target="#<?php echo $item->roleNameUrl ?>Modal">
                            <div class="card mb-3 --border-0 --shadow">
                                <h2 class="card__label <?php echo $bg ?> <?php echo $text ?> --shadow"><?php echo $item->roleName ?></h2>
                                <div class="card__label__detalle <?php echo $bg ?>"></div>
                                <div class="card__body card__container text-center">
                                    <img src="assets/img/<?php echo $item->roleImage ?>" alt="<?php echo $item->roleName ?>" class="card__img-icon">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="modal fade" id="<?php echo $item->roleNameUrl ?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $item->roleNameUrl ?>ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-sm">
                            <div class="modal-content --border-0 border--radius-0">
                                <div class="modal-header <?php echo $bg ?>">
                                    <h5 class="modal-title <?php echo $text ?>" id="<?php echo $item->roleNameUrl ?>ModalLabel"><?php echo $item->roleName ?></h5>
                                    <button type="button" class="close <?php echo $text ?>" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php if ($item->roleNameUrl == 'aspirante') { ?>
                                        <?php foreach ($menu_aspire as $aspire) { ?>
                                            <a href="<?php echo $aspire->menuNameUrl ?>" role="button" class="btn <?php echo $link_bg ?> btn-block text-left text-dark"><b><?php echo $aspire->menuName ?></b></a>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if ($item->roleNameUrl == 'estudiante') { ?>
                                        <?php foreach ($menu_student as $student) { ?>
                                            <a href="<?php echo $student->menuNameUrl ?>" role="button" class="btn <?php echo $link_bg ?> btn-block text-left text-dark"><b><?php echo $student->menuName ?></b></a>
                                        <?php } ?>
                                    <?php } ?>
                                    <?php if ($item->roleNameUrl == 'docente') { ?>
                                        <?php foreach ($menu_teacher as $teacher) { ?>
                                            <a href="<?php echo $teacher->menuNameUrl ?>" role="button" class="btn <?php echo $link_bg ?> btn-block text-left text-dark"><b><?php echo $teacher->menuName ?></b></a>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</main>
<?php echo $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== 
?>
<?php echo $this->section('js') ?>
<?php echo $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== 
?>
<?php echo $this->section('css') ?>
<?php echo $this->endSection('css') ?>