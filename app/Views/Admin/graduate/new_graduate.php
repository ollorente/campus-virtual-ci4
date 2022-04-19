<?= $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?= $this->section('title') ?>
Nuevo diplomado
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Nuevo diplomado</h1>
			<a href="<?php echo base_url(route_to('admin_graduates')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<?php if (session('msg')) : ?>
			<div class="alert alert-<?= session('msg.type') ?>" role="alert" id="alert">
				<?= session('msg.body') ?>
			</div>
			<?php endif; ?>

			<form action="<?php echo base_url(route_to('admin_create_graduate')) ?>" method="POST">
				<div class="form-group">
					<label for="name">Título del diplomado</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Título del diplomado" required autofocus>
				</div>
				<div class="form-group">
					<label for="url">Link del diplomado</label>
					<input type="text" class="form-control" name="url" id="url" placeholder="Link del diplomado" required>
				</div>
				<div class="form-group">
					<label for="is_active">Activo</label>
					<select class="form-control" name="is_active" id="is_active">
						<option value="0">No</option>
						<option value="1" selected>Si</option>
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