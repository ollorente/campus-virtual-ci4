<?= $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?= $this->section('title') ?>
Home
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?= $this->section('content') ?>
<main id="main" class="main d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col text-center mb-5">
                <a href="<?= base_url(route_to('about')) ?>" class="cursor-pointer">
                    <div class="card mb-3 --border-0 --shadow width-card mx-auto">
                        <h2 class="card__label bg--azul text--blanco --shadow small" style="font-family: 'arial', san-serif;">¿Quiénes somos?</h2>
                        <div class="card__label__detalle bg--azul"></div>
                        <div class="p-1"></div>
                    </div>
                </a>
            </div>
            <div class="w-100"></div>
            <?php foreach($roles as $v) : ?>
                <div class="col icono-espacio">
                
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>
<?= $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== 
?>
<?= $this->section('js') ?>
<?= $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== 
?>
<?= $this->section('css') ?>
<?= $this->endSection('css') ?>