<?= $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?= $this->section('title') ?>
Dashboard
<?= $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?= $this->section('content') ?>
<h1>Dashboard</h1>
<?= $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== ?>
<?= $this->section('js') ?>
<?= $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== ?>
<?= $this->section('css') ?>
<?= $this->endSection('css') ?>

<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Editar menú <b><?= $menu->menuName ?></b></h1>
			<a href="<?= base_url('backoffice/configuracion/menu/') . $menu->_id ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<?= '<span class="text-danger font-weight-bold">'. validation_errors() .'</span>' ?>
			<?= isset( $updated ) ? $updated : '' ?>
			<?= form_open() ?>
				<div class="form-group">
					<label for="name">Título del menú</label>
					<input type="text" class="form-control" name="name" value="<?= $menu->menuName ?>" id="name" placeholder="Título del menú" required autofocus>
				</div>
				<div class="form-group">
					<label for="url">Link del menú</label>
					<input type="text" class="form-control" name="url" value="<?= $menu->menuNameUrl ?>" id="url" placeholder="Link del menú" required>
				</div>
				<div class="form-group">
					<label for="role">Role</label>
					<select class="form-control" name="role" id="role">
						<?php foreach ($roles as $item) { ?>
						<option value="<?= $item['_id'] ?>" <?= $item['_id'] == $menu->menuRole ? 'selected' : ''; ?>><?= $item['roleName'] ?></option>
						<?php } ?>
                    </select>
				</div>
				<div class="form-group">
					<label for="url">Order</label>
					<input type="number" class="form-control" name="order" value="<?= $menu->menuOrder ?>" id="order" placeholder="Orden">
				</div>
				<div class="form-group">
                    <label for="is_active">Activo</label>
                    <select class="form-control" name="is_active" id="is_active">
                        <option value="0" <?php if ($menu->isMenuActive == '0') { echo 'selected'; } ?>>No</option>
                        <option value="1" <?php if ($menu->isMenuActive == '1') { echo 'selected'; } ?>>Si</option>
                    </select>
                </div>
				<button type="submit" class="btn btn-warning btn-block">Actualizar</button>
			<?= form_close() ?>

		</div>

	</div>

</div>
<!-- /.container-fluid -->
