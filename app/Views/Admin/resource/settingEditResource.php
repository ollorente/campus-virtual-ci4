<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?php echo $this->section('title') ?>
Editar categoría de objeto
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Editar categoría de objeto<br><b><?php echo $resourceTaxonomy->resourceTaxonomyName ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_setting_resource', $resourceTaxonomy->_id)) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="name">Título de la categoría</label>
					<input type="text" class="form-control" name="name" value="<?php echo $resourceTaxonomy->resourceTaxonomyName ?>" id="name" placeholder="Título del menú" required autofocus>
				</div>
				<div class="form-group">
					<label for="slug">Slug de la categoría</label>
					<input type="text" class="form-control" name="slug" value="<?php echo $resourceTaxonomy->resourceTaxonomySlug ?>" id="slug" placeholder="Link del menú" required>
				</div>
				<div class="form-group">
                    <label for="is_active">Activo</label>
                    <select class="form-control" name="is_active" id="is_active">
                        <option value="0" <?php if ($resourceTaxonomy->isResourceTaxonomyActive == '0') { echo 'selected'; } ?>>No</option>
                        <option value="1" <?php if ($resourceTaxonomy->isResourceTaxonomyActive == '1') { echo 'selected'; } ?>>Si</option>
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

