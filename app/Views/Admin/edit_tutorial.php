<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Editar tutorial
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Editar tutorial</h1>
			<a href="<?php echo base_url(route_to('admin_tutorial', $tutorial->_id)) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Título de la herramienta *</label>
					<input type="text" class="form-control" name="name" value="<?php echo $tutorial->tutorialTitle ?>" id="name" placeholder="Título de la herramienta *" required autofocus>
				</div>
				<div class="form-group">
					<label for="url">Slug de la herramienta *</label>
					<input type="text" class="form-control" name="slug" value="<?php echo $tutorial->tutorialSlug ?>" id="slug" placeholder="Slug de la herramienta *" required>
				</div>
				<div class="form-group">
					<label for="url">Link de la herramienta *</label>
					<input type="text" class="form-control" name="url" value="<?php echo $tutorial->tutorialLink ?>" id="url" placeholder="Link de la herramienta *" required>
				</div>
				<div class="form-group">
					<label for="url">Link de imagen</label>
					<input type="text" class="form-control" name="urlImg" value="<?php echo $tutorial->tutorialImage ?>" id="urlImg" placeholder="Link de imagen">
				</div>
				<div class="form-group">
					<label for="role">A quién va dirigido *</label>
					<select class="form-control" name="role" value="<?php echo $tutorial->tutorialRole ?>" id="role" required>
						<?php foreach ($roles as $role) { ?>
							<option value="<?php echo $role->_id ?>" <?php if ($role->_id == $tutorial->tutorialRole) { echo 'selected'; } ?>><?php echo $role->roleName ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="is_active">Activo</label>
					<select class="form-control" name="is_active" id="is_active">
						<option value="0" <?php if ($tutorial->isTutorialActive == '0') { echo 'selected'; } ?>>No</option>
						<option value="1" <?php if ($tutorial->isTutorialActive == '1') { echo 'selected'; } ?>>Si</option>
					</select>
				</div>
				<div class="form-group">
					<label for="is_lock">Bloqueado</label>
					<select class="form-control" name="is_lock" id="is_lock">
						<option value="0" <?php if ($tutorial->isTutorialLock == '0') { echo 'selected'; } ?>>No</option>
						<option value="1" <?php if ($tutorial->isTutorialLock == '1') { echo 'selected'; } ?>>Si</option>
					</select>
				</div>
				<button type="submit" class="btn btn-warning btn-block">Actualizar</button>
			</form>

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