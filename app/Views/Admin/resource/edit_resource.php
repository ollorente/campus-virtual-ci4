<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Dashboard
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Editar recurso <b><?php echo $resource->resourceCode ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_resource', $resource->_id)) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<div class="form-group">
					<label for="title">Código *</label>
					<input type="text" class="form-control" name="code" id="code" value="<?php echo $resource->resourceCode ?>" placeholder="Código *" required autofocus>
				</div>
				<div class="form-group">
					<label for="link">Imagen *</label>
					<input type="text" class="form-control" name="link" id="link" value="<?php echo $resource->resourceLink ?>" placeholder="Imagen *" required>
				</div>
				<div class="form-group">
					<label for="taxonomy">Taxonomía *</label>
					<select class="form-control" name="taxonomy" id="taxonomy" required>
						<?php foreach ($taxonomies as $taxonomy) { ?>
							<option value="<?php echo $taxonomy->_id ?>" <?php if ($resource->resourceTaxonomy === $taxonomy->_id) { echo ' selected'; } ?>><?php echo $taxonomy->resourceTaxonomyName ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="area">Área</label>
					<input type="text" class="form-control" name="area" id="area" value="<?php echo $resource->resourceArea ?>" placeholder="Área">
				</div>
				<div class="form-group">
					<label for="knowless_topic">Área del conocimiento</label>
					<input type="text" class="form-control" name="knowless_topic" id="knowless_topic" value="<?php echo $resource->resourceKnowlessTopic ?>" placeholder="Área del conocimiento">
				</div>
				<div class="form-group">
					<label for="keywords">Palabras claves</label>
					<input type="text" class="form-control" name="keywords" id="keywords" value="<?php echo $resource->resourceKeyWords ?>" placeholder="Palabras claves">
				</div>
				<div class="form-group">
					<label for="format">Formato</label>
					<input type="text" class="form-control" name="format" id="format" value="<?php echo $resource->resourceFormat ?>" placeholder="Formato">
				</div>
				<div class="form-group">
					<label for="entities">Entidades</label>
					<input type="text" class="form-control" name="entities" id="entities" value="<?php echo $resource->resourceEntities ?>" placeholder="Entidades">
				</div>
				<div class="form-group">
					<label for="created_at">Fecha de creación</label>
					<input type="date" class="form-control" name="created_at" id="created_at" value="<?php echo $resource->resourceCreatedAt ?>" placeholder="<?php echo date('Y-m-d', strtotime($resource->resourceCreatedAt)) ?>">
				</div>
				<div class="form-group">
					<label for="cost">Costo</label>
					<input type="text" class="form-control" name="cost" id="cost" value="<?php echo $resource->resourceCost ?>" placeholder="Costo">
				</div>
				<div class="form-group">
					<label for="rights">Derechos</label>
					<input type="text" class="form-control" name="rights" id="rights" value="<?php echo $resource->resourceRights ?>" placeholder="Derechos">
				</div>
				<div class="form-group">
					<label for="is_active">Activo</label>
					<select class="form-control" name="is_active" id="is_active">
						<option value="0" <?php if ($resource->isResourceActive == '0') { echo 'selected'; } ?>>No</option>
						<option value="1" <?php if ($resource->isResourceActive == '1') { echo 'selected'; } ?>>Si</option>
					</select>
				</div>
				<button type="submit" class="btn btn-warning btn-block">Actualizar</button>
			</form>

		</div>

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