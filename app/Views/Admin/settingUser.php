<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?php echo $this->section('title') ?>
Usuario
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Usuario<br><b><?php echo strtoupper($user->username) ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_setting_users')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<div class="card border-0 mb-3 shadow-sm">
				<p class="px-3 py-2 my-0">
					<b>Usuario:</b>
					<br /><?php echo strtoupper($user->username) ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Correo electrónico:</b>
					<br /><?php echo $user->email ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Banneado:</b>
					<br /><?php echo $user->banned == 0 ? 'No' : 'Si' ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Último acceso:</b>
					<br /><?php echo $user->last_login ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Último modificación:</b>
					<br /><?php echo $user->updated_at ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Creado:</b>
					<br /><?php echo $user->created_at ?>
				</p>
				<p class="px-3 py-2 mt-0 mb-3">
					<a href="<?php echo base_url(route_to('admin_setting_edit_user', $user->_id)) ?>" class="btn btn-outline-warning btn-block" role="button">Editar</a>
				</p>
			</div>

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

