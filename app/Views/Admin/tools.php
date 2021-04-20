<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Herramientas
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

  <div class="row">
    <div class="col-12 d-flex justify-content-between align-items-center mb-4">
      <h1 class="h3 text-gray-800">Herramientas</h1>
      <a href="<?php echo base_url(route_to('admin_new_tool')) ?>" class="btn btn-outline-primary btn-sm" role="button">Nueva</a>
    </div>

    <div class="col-12">
      <div class="d-flex justify-content-between bg-info text-white">
        <div class="d-flex flex-row">
          <span class="m-2 text-center">ID</span>
          <span class="m-2 text-left">Herramienta</span>
        </div>
        <div class="m-2 text-right">Estado</div>
      </div>

      <?php if ($tools) { ?>
        <?php foreach ($tools as $item) { ?>
          <div class="d-flex justify-content-between border-bottom">
            <div class="d-flex flex-row">
              <span class="m-2 text-right"><?php echo $item->_id ?></span>
              <a href="<?php echo base_url(route_to('admin_tool', $item->_id)) ?>" class="m-2 text-left"><?php echo $item->toolName ?></a>
            </div>
            <div class="m-2 text-right">
              <div class="custom-control custom-switch">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="index<?php echo $item->_id ?>"
                  checked="<?php if ($item->isToolActive == '1') { echo 'checked'; } else { echo ''; } ?>">
                <label class="custom-control-label" for="index<?php echo $item->_id ?>"></label>
              </div>
            </div>
          </div>
        <?php } ?>
      <?php } else { ?>
        <div class="alert alert-light shadow-sm mt-3" role="alert">
          No hay items activos.
        </div>
      <?php } ?>

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
  <?php echo $this->endSection('css') ?>