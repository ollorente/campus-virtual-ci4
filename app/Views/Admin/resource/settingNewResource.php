<?= $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?= $this->section('title') ?>
Nueva categoría de objeto
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Nueva categoría de objeto</b></h1>
			<a href="<?= base_url(route_to('admin_setting_resources')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Título de la categoría</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Título del menú" required autofocus>
				</div>
				<div class="form-group">
					<label for="slug">Slug de la categoría</label>
					<input type="text" class="form-control" name="slug" id="slug" placeholder="Link del menú" required>
				</div>
				<div class="form-group">
					<label for="is_active">Activo</label>
					<select class="form-control" name="is_active" id="is_active">
						<option value="0" selected>No</option>
						<option value="1">Si</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Crear</button>
			</form>

		</div>

	</div>

</div>
<!-- /.container-fluid -->
<?= $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== 
?>
<?= $this->section('js') ?>
<?= $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== 
?>
<?= $this->section('css') ?>
<?= $this->endSection('css') ?>