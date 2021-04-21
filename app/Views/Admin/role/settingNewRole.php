<?= $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?= $this->section('title') ?>
Nuevo rol
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Nuevo rol</b></h1>
			<a href="<?php echo base_url(route_to('admin_setting_roles')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Título del role</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Título del role" required autofocus>
				</div>
				<div class="form-group">
					<label for="url">Link del role</label>
					<input type="text" class="form-control" name="url" id="url" placeholder="Link del role" required>
				</div>
				<div class="form-group">
					<label for="role_order">Orden</label>
					<input type="number" class="form-control" min="0" value="0" name="role_order" id="role_order">
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