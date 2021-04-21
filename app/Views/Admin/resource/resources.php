<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Recursos
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

  <div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 text-gray-800">Recursos</h1>
      <a href="<?php echo base_url(route_to('admin_new_resource')) ?>" class="btn btn-outline-primary btn-sm" role="button">Nuevo</a>
    </div>

    <div class="col-12">
      <div class="d-flex justify-content-between bg-info text-white">
        <div class="d-flex flex-row">
          <span class="m-2 text-center">ID</span>
          <span class="m-2 text-left">Recurso</span>
        </div>
        <div class="m-2 text-right">Estado</div>
      </div>

      <?php if ($resources) { ?>
        <?php foreach ($resources as $resource) { ?>
          <div class="d-flex justify-content-between align-middle border-bottom">
            <div class="d-flex flex-row align-middle">
              <span class="m-2 text-right"><?php echo $resource->_id ?></span>
              <a href="<?php echo base_url(route_to('admin_resource', $resource->_id)) ?>" class="m-2 text-left"><?php echo $resource->resourceCode ?></a>
            </div>
            <div class="m-2 text-right">
              <div class="custom-control custom-switch">
                <span>
                  <input type="checkbox" class="custom-control-input" id="index<?php echo $resource->_id ?>" <?php if ($resource->isResourceActive === '1') { echo 'checked'; } else { echo ''; } ?>>
                  <label class="custom-control-label" for="index<?php echo $resource->_id ?>"></label>
                </span>
                <a href="<?php echo base_url(route_to('admin_resource', $resource->_id)) ?>" class="">
                <img src="<?php echo $resource->resourceLink ?>" alt="<?php echo $resource->resourceCode ?>" class="img-prev rounded-circle" />
                </a>
              </div>
            </div>
          </div>
        <?php } ?>
      <?php } else { ?>
        <div class="alert alert-light shadow-sm mt-3" role="alert">
          No hay items activos.
        </div>
      <?php } ?>

    </div>

    <div class="col-12 text-center mt-5"><?php echo $pager->links() ?></div>

  </div>

</div>
<!-- /.container-fluid -->
<?php echo $this->endSection('content') ?>

<?php // ===X=== SCRIPTS ===X=== 
?>
<?php echo $this->section('js') ?>
<?php echo $this->endSection('js') ?>

<?php // ===X=== STYLES ===X=== 
?>
<?php echo $this->section('css') ?>
<style>
  .custom-switch {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .img-prev {
    width: 3rem;
    height: 3rem;
    object-fit: cover;
    position: center center;
  }
</style>
<?php echo $this->endSection('css') ?>