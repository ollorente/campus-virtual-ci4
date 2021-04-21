<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Tutorial
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Tutorial<br><b><?php echo $tutorial->tutorialTitle ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_tutorials')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<div class="card border-0 mb-3 shadow-sm">
				<p class="px-3 py-2 my-0">
					<b>Nombre:</b>
					<br /><?php echo $tutorial->tutorialTitle ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Slug:</b>
					<br /><?php echo $tutorial->tutorialSlug ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Link:</b>
					<br /><?php echo $tutorial->tutorialLink ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>A quien va dirigido:</b>
					<br /><?php echo $role->roleName ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Imagen:</b>
					<br /><img src="<?php if ($tutorial->tutorialImage) { echo $tutorial->tutorialImage; } else { echo base_url('/assets/img/no-hay.png'); } ?>" class="img-fluid rounded">
				</p>
				<p class="px-3 pt-2 pb-0 my-0">
				<div class="custom-control custom-switch mx-3">
					<input
						type="checkbox"
						class="custom-control-input"
						name="isActive"
						id="isActive"
						<?php if ($tutorial->isTutorialActive == 1) { echo 'checked="checked"'; } else { echo ''; } ?>>
					<label class="custom-control-label" for="isActive">Activo</label>
				</div>
				</p>
				<p class="px-3 pt-0 pb-2 my-0">
				<div class="custom-control custom-switch mx-3">
					<input
						type="checkbox"
						class="custom-control-input"
						name="isLock"
						id="isLock"
						<?php if ($tutorial->isTutorialLock == 1) { echo 'checked="checked"'; } else { echo ''; } ?>>
					<label class="custom-control-label" for="isLock">Bloqueado</label>
				</div>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Creado:</b>
					<br /><?php $fecha = explode(' ', $tutorial->tutorialCreatedAt); echo $fecha[0] ?>
				</p>
				<p class="px-3 py-2 mt-0 mb-3">
					<a href="<?php echo base_url(route_to('admin_edit_tutorial', $tutorial->_id)) ?>" class="btn btn-outline-warning btn-block" role="button">Editar</a>
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