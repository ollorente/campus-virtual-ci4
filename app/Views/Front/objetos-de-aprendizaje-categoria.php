<?php echo $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Categoría de objetos de aprendizaje
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
						<li class="breadcrumb-item"><a href="<?php echo base_url('objetos-de-aprendizaje/categorias') ?>" class="text--blanco font-weight-bold">Categoría objetos de aprendizaje</a></li>
						<li class="breadcrumb-item active font-weight-bold" aria-current="page"><?php echo $category->objectTaxonomyName ?></li>
					</ol>
				</nav>

				<h1 class="mt-5 mb-3 text-center title__main h3">
					<small>Objetos de aprendizaje</small><br /><span>"<?php echo $category->objectTaxonomyName ?>"</span>
				</h1>

			</div>
			<div class="col-12">
				<div class="row">
					<?php if ($objects) { ?>
						<?php foreach ($objects as $item) { ?>
							<div class="col-12 col-md-6 col-lg-4 col-xl-3">
								<div class="card mb-4 --shadow-sm --border-radius-1 --border-0">
									<img src="<?php echo $item->objectLink ?>" class="card-img-top" alt="<?php echo $item->objectTitle ?>">
									<div class="card-body">
										<h5 class="card-title card__title-truncate"><?php echo $item->objectTitle ?></h5>
										<a href="#" class="btn btn--azul btn-block" data-toggle="modal" data-target="#<?php echo $item->objectObject ?>Modal">VER</a>
									</div>
								</div>
							</div>
						<?php } ?>

						<?php foreach ($objects as $item) { ?>
							<div class="modal fade" id="<?php echo $item->objectObject ?>Modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $item->objectObject ?>ModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered modal-xl">
									<div class="modal-content">
										<div class="modal-header bg--ocre --border-0">
											<h5 class="modal-title" id="<?php echo $item->objectObject ?>ModalLabel"><?php echo $item->objectTitle ?></h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body p-0">
											<div class="embed-responsive embed-responsive-16by9">
												<iframe id="video" class="embed-responsive-item video" src="https://www.youtube.com/embed/<?php echo $item->objectYoutube ?>?rel=0" allowfullscreen></iframe>
											</div>
										</div>
										<div class="modal-footer --border-0">
											<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
											<button type="button" class="btn btn--cielo" hidden>Solicitar</button>
											<div class="container mt-5" style="font-family: 'Arial', sans-serif;">
												<span>Si usted es docente de la universidad y desea utilizar este "Objeto de Aprendizaje en paquete SCORM" para su clase, escríbanos a <b>sietic@unicolmayor.edu.co</b> solicitándolo desde su <b>Correo Institucional</b>.</span>
												<br />
												<br />
												<span><b>Asunto: </b>Solicitud Objeto de Aprendizaje: "<?php echo $item->objectTitle ?>".</span>
												<br />
												<span><b>Mensaje: </b><b>Ref: </b><?php echo $item->_id ?>-<?php echo strtoupper($item->objectObject) ?></span>
											</div>
										</div>
									</div>
								</div>
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