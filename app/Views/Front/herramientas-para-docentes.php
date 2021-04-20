<?php echo $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Herramientas para docentes
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
						<li class="breadcrumb-item active font-weight-bold" aria-current="page">Herramientas para
							docentes</li>
					</ol>
				</nav>

				<h1 class="mt-5 mb-3 text-center title__main h3">Herramientas para docentes</h1>
			</div>

			<div class="col-12 pt-2">
				<div class="row">
					<?php if ($tools) { ?>
						<?php foreach ($tools as $item) { ?>
							<div class="col-12 col-sm-6 col-md-4 col-lg-3">
								<a href="<?php echo $item->toolNameUrl ?>" target="_blank">
									<div class="card mb-4 --shadow-sm --border-radius-1 --border-0">
										<?php if ($item->toolImageUrl) { ?>
											<img src="<?php echo $item->toolImageUrl ?>" class="card-img-top rounded-top img-tutorial" alt="<?php echo $item->toolName ?>">
										<?php } else { ?>
											<img src="<?php echo base_url() ?>assets/img/default.png" class="card-img-top rounded-top img-tutorial" alt="<?php echo $item->toolName ?>">
										<?php } ?>
										<div class="card-body p-3">
											<h3 class="card-text text-dark font-weight-bold h5" style="font-family: 'arial', sans-serif;"><?php echo $item->toolName ?></h3>
											<small class="card-text text-dark font-weight-bold h6" style="font-family: 'arial', sans-serif;"><?php echo $item->toolDescription ?></small>
										</div>
									</div>
								</a>
							</div>
						<?php } ?>
					<?php } else { ?>
						<div class="col-12 alert alert-light font-weight-bold" role="alert">
							En este momento no tenemos ninguna.
						</div>
					<?php } ?>

					<div class="col-12 text-center mt-5"><?php echo $pager->links() ?></div>

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