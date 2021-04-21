<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?php echo $this->section('title') ?>
Dashboard
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Editar usuario <b><?php echo $user->username ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_setting_user', $user->_id)) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="username">Usuario</label>
					<input type="text" class="form-control" name="username" value="<?php echo $user->username ?>" id="username" placeholder="Usuario" required autofocus>
				</div>
				<div class="form-group">
					<label for="email">Correo electrónico</label>
					<input type="text" class="form-control" name="email" value="<?php echo $user->email ?>" id="email" placeholder="Correo electrónico" required>
				</div>
				<div class="form-group">
					<label for="auth_level">Nivel de acceso</label>
					<select class="form-control" name="auth_level" id="auth_level">
						<?php foreach ($authLevels as $level): ?>
							<option value="<?php echo $level->_id ?>"><?php echo $level->name ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group">
					<label for="banned">Banneado</label>
					<select class="form-control" name="banned" id="banned">
						<option <?php if ( $user->banned == 1 ) { echo 'selected'; } ?> value="1">Si</option>
						<option <?php if ( $user->banned == 0 ) { echo 'selected'; } ?> value="0">No</option>
					</select>
				</div>
				<button type="submit" class="btn btn-warning btn-block">Actualizar</button>
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

