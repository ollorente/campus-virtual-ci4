<?php echo $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Categorías de objetos de aprendizaje
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
						<li class="breadcrumb-item"><a href="<?php echo base_url() ?>" class="text--blanco font-weight-bold">Inicio</a></li>
						<li class="breadcrumb-item active font-weight-bold" aria-current="page">Categorías Objetos de aprendizaje</li>
					</ol>
				</nav>

				<h1 class="mt-5 mb-3 text-center title__main h3">Categorías Objetos de aprendizaje</h1>

			</div>

			<div class="col-12">
				<div class="row">
					<?php if ($taxonomies) { ?>
						<?php foreach ($taxonomies as $item) { ?>
							<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">
								<a href="<?= $item->getLink() ?>">
									<img src="<?php echo $item->objectTaxonomySlug ?>" class="card-img-top rounded --shadow mb-3 img--recurso" alt="<?php echo $item->objectTaxonomyName ?>">
								</a>
							</div>
						<?php } ?>
					<?php } else { ?>
						<div class="col-12 alert alert-light font-weight-bold" role="alert">
							En este momento no tenemos ninguno.
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