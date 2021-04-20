<?php echo $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
¿Quiénes somos?
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<main id="main" class="main d-flex align-items-center">
	<div class="container">
		<div class="row">

			<div class="col-12 pt-2">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb  bg--amarillo">
						<li class="breadcrumb-item"><a href="<?= base_url() ?>" class="text--blanco font-weight-bold">Inicio</a></li>
						<li class="breadcrumb-item active font-weight-bold" aria-current="page">¿Quiénes somos?</li>
					</ol>
				</nav>

				<h1 class="mt-5 mb-3 text-center title__main h3">¿Quiénes somos?</h1>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/x4EXrGTfM_A?rel=0" allowfullscreen></iframe>
				</div>
			</div>

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