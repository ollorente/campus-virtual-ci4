<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== ?>
<?php echo $this->section('title') ?>
Recurso
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== ?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Recurso<br><b><?php echo $resource->resourceCode ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_resources')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<div class="card border-0 shadow-sm mb-4">
        <div class="card-body p-0">
          <p class="px-3 py-2 my-0">
            <b>Imagen:</b>
            <br>
            <div class="px-3 text-center">
              <?php if ($resource->resourceLink) { ?>
              <img src="<?php echo base_url($resource->resourceLink) ?>" class="img-fluid rounded">
              <?php } else { ?>
              <img src="<?php echo base_url('assets/img/no-hay.png') ?>" class="rounded">
              <?php } ?>
            </div>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Área:</b>
            <br><?php echo $resource->resourceArea ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Área del conocimiento:</b>
            <br><?php echo $resource->resourceKnowlessTopic ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Palabras claves:</b>
            <br><?php echo $resource->resourceKeyWords ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Formato:</b>
            <br><?php echo $resource->resourceFormat ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Entidades:</b>
            <br><?php echo $resource->resourceEntities ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Costo:</b>
            <br><?php echo $resource->resourceCost ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Derechos:</b>
            <br><?php echo $resource->resourceRights ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Taxonomía:</b>
            <br><?php echo $taxonomy->resourceTaxonomyName ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Código:</b>
            <br><?php echo $resource->resourceCode ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Creado:</b>
            <br><?php $fecha = explode(' ', $resource->resourceCreatedAt); echo $fecha[0] ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Accesos:</b>
            <br><?php echo $resource->resourceCodeAccess ?>
          </p>
          <p class="px-3 py-2 my-0">
            <b>Vistas:</b>
            <br><?php echo $resource->resourceViews ?>
          </p>
          <p class="px-3 py-2 my-0">
            <div class="custom-control custom-switch mx-3">
              <input type="checkbox" class="custom-control-input" name="isActive" id="isActive" <?php if ($resource->isResourceActive == 1) { echo 'checked="checked"'; } else { echo ''; } ?>>
              <label class="custom-control-label" for="isActive">Activo</label>
            </div>
          </p>
          <p class="px-3 py-2 mt-0 mb-3">
            <a href="<?php echo base_url(route_to('admin_edit_resource', $resource->_id)) ?>" class="btn btn-outline-warning btn-block" role="button">Editar</a>
          </p>
        </div>
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

