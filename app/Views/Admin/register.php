<?= $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?= $this->section('title') ?>
Registro
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?= $this->section('content') ?>
<main id="main" class="main d-flex align-items-center">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-6 offset-md-3">
				<h1 class="mb-3 text-center title__main h3">Registro</h1>
				<form action="<?= base_url('register/store') ?>" method="POST">
					<div class="form-group">
						<input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Ingrese Correo electrónico..." autofocus required>
					</div>
					<p class="help"><?php // ERROR ?></p>
					<div class="form-group">
						<input type="password" class="form-control form-control-user" id="passwd" name="passwd" placeholder="Contraseña" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control form-control-user" id="passwd_confirm" name="passwd_confirm" placeholder="Confirmar contraseña">
					</div>
					<button class="btn btn--azul btn-block" type="submit">CREAR</button>
				</form>
			</div>

		</div>
	</div>
</main>
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