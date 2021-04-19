<?= $this->extend('Front/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?= $this->section('title') ?>
Login
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?= $this->section('content') ?>
<main id="main" class="main d-flex align-items-center">
	<div class="container">
		<div class="row">

			<div class="col-12 col-md-6 offset-md-3">
				<h1 class="mb-3 text-center title__main h3">Login</h1>
				<form action="backoffice/login">
					<div class="form-group">
						<input type="email" class="form-control form-control-user" id="login_string" name="login_string" placeholder="Ingrese Correo electrónico...">
					</div>
					<div class="form-group">
						<input type="password" class="form-control form-control-user" id="login_pass" name="login_pass" placeholder="Password">
					</div>
					<button class="btn btn--azul btn-block" type="submit" name="submit" value="Login" id="submit_button">ENTRAR</button>
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