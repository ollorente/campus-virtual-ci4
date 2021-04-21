<?= $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?= $this->section('title') ?>
Nuevo usuario
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Nuevo usuario</h1>
			<a href="<?php echo base_url(route_to('admin_setting_users')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="username">Usuario</label>
					<input type="text" class="form-control" name="username" id="username" placeholder="Usuario" required autofocus>
				</div>
				<div class="form-group">
					<label for="email">Correo electrónico</label>
					<input type="text" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
				</div>
				<div class="form-group">
					<label for="passwd">Password</label>
					<input type="password" class="form-control" name="passwd" id="passwd" placeholder="Password" required>
				</div>
				<div class="form-group">
					<label for="auth_level">Nivel de acceso</label>
					<select class="form-control" name="auth_level" id="auth_level">
						<option disabled selected>-- Elige un nivel de acceso --</option>
						<?php foreach ($authLevels as $level) : ?>
							<option value="<?php echo $level->_id ?>"><?php echo $level->name ?></option>
						<?php endforeach ?>
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