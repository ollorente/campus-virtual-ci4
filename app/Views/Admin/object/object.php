<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Objeto
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Objeto<br></b><b><?php echo $object->objectTitle ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_objects')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<?php if (session('msg')) : ?>
			<div class="alert alert-<?= session('msg.type') ?>" role="alert" id="alert">
				<?= session('msg.body') ?>
			</div>
			<?php endif; ?>

			<div class="card border-0 mb-3 shadow-sm">
				<p class="px-3 py-2 my-0">
					<b>Imagen:</b>
					<br>
				<div class="px-3 text-center">
					<?php if ($object->objectLink) { ?>
						<img src="<?php echo base_url($object->objectLink) ?>" class="img-fluid rounded">
					<?php } else { ?>
						<img src="<?php echo base_url('assets/img/no-hay.png') ?>" class="rounded">
					<?php } ?>
				</div>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Youtube:</b>
					<br>
				<div class="px-3 text-center">
					<?php if ($object->objectYoutube) { ?>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $object->objectYoutube ?>?rel=0" allowfullscreen></iframe>
						</div>
					<?php } else { ?>
						<img src="<?php echo base_url('assets/img/no-hay.png') ?>" class="rounded">
					<?php } ?>
				</div>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Objeto:</b>
					<br><?php echo $object->objectObject ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Área:</b>
					<br><?php echo $object->objectArea ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Área del conocimiento:</b>
					<br><?php echo $object->objectKnowlessTopic ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Localización:</b>
					<br><?php echo $object->objectHosting ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Título:</b>
					<br><?php echo $object->objectTitle ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Descripción:</b>
					<br><?php echo $object->objectDescription ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Lenguaje:</b>
					<br><?php echo $object->objectLanguage ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Palabras clave:</b>
					<br><?php echo $object->objectKeyWords ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Formato:</b>
					<br><?php echo $object->objectFormat ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Tamaño:</b>
					<br><?php echo $object->objectSize ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Requerimientos:</b>
					<br><?php echo $object->objectRequirement ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Instrucciones:</b>
					<br><?php echo $object->objectInstructions ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Versión:</b>
					<br><?php echo $object->objectVersion ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Contribuidores:</b>
					<br><?php echo $object->objectContributors ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Entidades:</b>
					<br><?php echo $object->objectEntities ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Creado:</b>
					<br><?php $fecha = explode(' ', $object->objectCreatedAt);
						echo $fecha[0] ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Interactividad:</b>
					<br><?php echo $object->objectInteractivity ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Costo:</b>
					<br><?php echo $object->objectCost ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Derechos:</b>
					<br><?php echo $object->objectRights ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Uso:</b>
					<br><?php echo $object->objectUse ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Clasificación:</b>
					<br><?php echo $object->objectClasification ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Taxonomía:</b>
					<br><?php echo $taxonomy->objectTaxonomyName ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Vistas:</b>
					<br><?php echo $object->objectViews ?>
				</p>
				<p class="px-3 py-2 my-0">
				<div class="custom-control custom-switch mx-3">
					<input
						type="checkbox"
						class="custom-control-input"
						name="isActive"
						id="isActive"
						<?php if ($object->isObjectActive == 1) { echo 'checked="checked"'; } else { echo ''; } ?>>
					<label class="custom-control-label" for="isActive">Activo</label>
				</div>
				</p>
				<p class="px-3 py-2 mt-0 mb-3">
					<a href="<?php echo base_url(route_to('admin_edit_object', $object->_id)) ?>" class="btn btn-outline-warning btn-block" role="button">Editar</a>
				</p>
			</div>

		</div>

	</div>

</div>
<!-- /.container-fluid -->
<?php echo $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== 
?>
<?php echo $this->section('js') ?>
<?php echo $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== 
?>
<?php echo $this->section('css') ?>
<?php echo $this->endSection('css') ?>