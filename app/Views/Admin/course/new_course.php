<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?php echo $this->section('title') ?>
Nuevo curso
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Nuevo curso</h1>
			<a href="<?php echo base_url(route_to('admin_courses')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<?php if (session('msg')) : ?>
			<div class="alert alert-<?= session('msg.type') ?>" role="alert" id="alert">
				<?= session('msg.body') ?>
			</div>
			<?php endif; ?>

			<form action="<?php echo base_url(route_to('admin_create_course')) ?>" method="POST">
				<div class="form-group">
					<label for="name">Título del curso</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Título del curso" required autofocus>
				</div>
				<div class="form-group">
					<label for="url">Link del curso</label>
					<input type="text" class="form-control" name="url" id="url" placeholder="Link del curso" required>
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
<?php echo $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== ?>
<?php echo $this->section('js') ?>
<?php echo $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== ?>
<?php echo $this->section('css') ?>
<?php echo $this->endSection('css') ?>

