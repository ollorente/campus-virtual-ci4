<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Curso
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Curso<br><b><?php echo $course->courseName ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_courses')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<?php if (session('msg')) : ?>
			<div class="alert alert-<?= session('msg.type') ?>" role="alert" id="alert">
				<?= session('msg.body') ?>
			</div>
			<?php endif; ?>

			<div class="card border-0 mb-3 shadow-sm">
				<p class="px-3 py-2 my-0">
					<b>Nombre:</b>
					<br /><?php echo $course->courseName ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Link:</b>
					<br /><?php echo $course->courseNameUrl ?>
				</p>
				<p class="px-3 py-2 my-0">
				<div class="custom-control custom-switch mx-3">
					<input
						type="checkbox"
						class="custom-control-input"
						name="isActive"
						id="isActive" <?php if ($course->isCourseActive == 1) { echo 'checked="checked"'; } else { echo ''; } ?>>
					<label class="custom-control-label" for="isActive">Activo</label>
				</div>
				</p>
				<p class="px-3 py-2 mt-0 mb-3">
					<a href="<?php echo base_url(route_to('admin_edit_course', $course->_id)) ?>" class="btn btn-outline-warning btn-block" role="button">Editar</a>
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