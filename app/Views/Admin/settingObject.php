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
			<h1 class="h3 text-gray-800">Categoría de objeto <b><?= $objecttaxonomies->objectTaxonomyName ?></b></h1>
			<a href="<?= base_url('backoffice/configuracion/objetos') ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

            <div class="card border-0 mb-3 shadow-sm">
				<p class="px-3 py-2 my-0">
					<b>Nombre:</b>
					<br /><?= $objecttaxonomies->objectTaxonomyName ?>
				</p>
				<p class="px-3 py-2 my-0">
					<b>Slug:</b>
					<br /><?= $objecttaxonomies->objectTaxonomySlug ?>
				</p>
				<p class="px-3 py-2 my-0">
					<div class="custom-control custom-switch mx-3">
						<input type="checkbox" class="custom-control-input" name="isActive" id="isActive"
							<?php if ($objecttaxonomies->isObjectTaxonomyActive == 1) { echo 'checked="checked"'; } else { echo ''; } ?>>
						<label class="custom-control-label" for="isActive">Activo</label>
					</div>
				</p>
				<p class="px-3 py-2 mt-0 mb-3">
					<a href="<?= base_url('backoffice/configuracion/objeto/'. $objecttaxonomies->objectTaxonomySlug .'/editar') ?>" class="btn btn-outline-warning btn-block" menu="button">Editar</a>
				</p>
            </div>

		</div>

	</div>

</div>
<!-- /.container-fluid -->