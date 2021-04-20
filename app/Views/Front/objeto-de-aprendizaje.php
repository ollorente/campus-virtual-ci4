<?php echo $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?php echo $this->section('title') ?>
Objeto de aprendizaje
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?php echo $this->section('content') ?>
<main id="main" class="main d-flex align-items-center">
	<div class="container">
		<div class="row">

            <h1>Objeto de aprendizaje</h1>

		</div>
	</div>
</main>
<?php echo $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== ?>
<?php echo $this->section('js') ?>
<?php echo $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== ?>
<?php echo $this->section('css') ?>
<?php echo $this->endSection('css') ?>