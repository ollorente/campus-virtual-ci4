<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?php echo $this->section('title') ?>
Editar role
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Editar role<br><b><?php echo $role->roleName ?></b></h1>
			<a href="<?php echo base_url('backoffice/configuracion/role/') . $role->roleNameUrl ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Título del curso</label>
					<input type="text" class="form-control" name="name" value="<?php echo $role->roleName ?>" id="name" placeholder="Título del role" required autofocus>
				</div>
				<div class="form-group">
					<label for="url">Link del curso</label>
					<input type="text" class="form-control" name="url" value="<?php echo $role->roleNameUrl ?>" id="url" placeholder="Link del role" required>
				</div>
				<div class="form-group">
					<label for="url">Imagen</label>
					<input type="text" class="form-control" name="image" value="<?php echo $role->roleImage ?>" id="image" placeholder="Archivo">
				</div>
				<div class="form-group">
					<label for="url">Order</label>
					<input type="number" class="form-control" name="order" min="0" value="<?php echo $role->roleOrder ?>" id="order" placeholder="Orden">
				</div>
				<div class="form-group">
                    <label for="is_active">Activo</label>
                    <select class="form-control" name="is_active" id="is_active">
                        <option value="0" <?php if ($role->isRoleActive == '0') { echo 'selected'; } ?>>No</option>
                        <option value="1" <?php if ($role->isRoleActive == '1') { echo 'selected'; } ?>>Si</option>
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

