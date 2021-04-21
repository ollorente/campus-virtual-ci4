<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Editar objeto
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Editar objeto<br><b><?php echo $object->objectTitle ?></b></h1>
			<a href="<?php echo base_url(route_to('admin_object', $object->_id)) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<form action="" method="POST">
				<hr class="mt-0" />
				<h3 class="h4 text-gray-800 mb-4">General</h3>

				<div class="form-group">
					<label for="title">Título *</label>
					<input type="text" class="form-control" name="title" id="title" value="<?php echo $object->objectTitle ?>" placeholder="Título *" required autofocus>
				</div>
				<div class="form-group">
					<label for="object">Slug de objeto *</label>
					<input type="text" class="form-control" name="object" id="object" value="<?php echo $object->objectObject ?>" placeholder="Slug de objeto *" required>
				</div>
				<div class="form-group">
					<label for="taxonomy">Taxonomía *</label>
					<select class="form-control" name="taxonomy" id="taxonomy" required>
						<?php foreach ($taxonomies as $taxonomy) { ?>
							<option value="<?php echo $taxonomy->_id ?>" <?php if ($object->objectTaxonomy === $taxonomy->_id) { echo ' selected'; } ?>>
								<?php echo $taxonomy->objectTaxonomyName ?>
							</option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="description">Descripción</label>
					<textarea class="form-control" name="description" id="description" rows="4" placeholder="Descripción" maxlength="255"><?php echo $object->objectDescription ?></textarea>
				</div>
				<div class="form-group">
					<label for="link">Link de la imagen</label>
					<textarea class="form-control" name="link" id="link" rows="2" placeholder="Link de la imagen" maxlength="255"><?php echo $object->objectLink ?></textarea>
				</div>
				<div class="form-group">
					<label for="youtube">Link de Youtube</label>
					<input type="text" class="form-control" name="youtube" id="youtube" value="<?php echo $object->objectYoutube ?>" placeholder="Link de Youtube">
				</div>
				<div class="form-group">
					<label for="language">Idioma</label>
					<input type="text" class="form-control" name="language" id="language" value="<?php echo $object->objectLanguage ?>" placeholder="Idioma">
				</div>
				<div class="form-group">
					<label for="key_words">Palabras clave</label>
					<input type="text" class="form-control" name="key_words" id="key_words" value="<?php echo $object->objectKeyWords ?>" placeholder="Palabras clave">
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Técnico</h3>

				<div class="form-group">
					<label for="format">Formato</label>
					<input type="text" class="form-control" name="format" id="format" value="<?php echo $object->objectFormat ?>" placeholder="Formato">
				</div>
				<div class="form-group">
					<label for="size">Tamaño</label>
					<input type="text" class="form-control" name="size" id="size" value="<?php echo $object->objectSize ?>" placeholder="Tamaño">
				</div>
				<div class="form-group">
					<label for="requirement">Requerimientos</label>
					<textarea class="form-control" name="requirement" id="requirement" rows="3" placeholder="Requerimientos" maxlength="255"><?php echo $object->objectRequirement ?></textarea>
				</div>
				<div class="form-group">
					<label for="instructions">Instrucciones</label>
					<textarea class="form-control" name="instructions" id="instructions" rows="3" placeholder="Instrucciones" maxlength="255"><?php echo $object->objectInstructions ?></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Ciclo</h3>

				<div class="form-group">
					<label for="version">Versión</label>
					<input type="text" class="form-control" name="version" id="version" value="<?php echo $object->objectVersion ?>" placeholder="Versión">
				</div>
				<div class="form-group">
					<label for="contributors">Contribuyentes</label>
					<textarea class="form-control" name="contributors" id="contributors" rows="3" placeholder="Contribuyentes" maxlength="255"><?php echo $object->objectContributors ?></textarea>
				</div>
				<div class="form-group">
					<label for="entities">Entidades</label>
					<textarea class="form-control" name="entities" id="entities" rows="3" placeholder="Entidades" maxlength="255"><?php echo $object->objectEntities ?></textarea>
				</div>
				<div class="form-group">
					<label for="created_at">Fecha de creación</label>
					<input type="date" class="form-control" name="created_at" id="created_at" value="<?php echo date('Y-m-d', strtotime($object->objectCreatedAt)) ?>" placeholder="<?php echo date('Y-m-d', strtotime($object->objectCreatedAt)) ?>">
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Educacional</h3>

				<div class="form-group">
					<label for="area">Área</label>
					<input type="text" class="form-control" name="area" id="area" value="<?php echo $object->objectArea ?>" placeholder="Área">
				</div>
				<div class="form-group">
					<label for="interactivity">Interactividad</label>
					<input type="text" class="form-control" name="interactivity" id="interactivity" value="<?php echo $object->objectInteractivity ?>" placeholder="Interactividad">
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Derechos</h3>

				<div class="form-group">
					<label for="cost">Costo</label>
					<input type="text" class="form-control" name="cost" id="cost" value="<?php echo $object->objectCost ?>" placeholder="Costo">
				</div>
				<div class="form-group">
					<label for="rights">Derechos</label>
					<textarea class="form-control" name="rights" id="rights" rows="2" placeholder="Derechos" maxlength="255"><?php echo $object->objectRights ?></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Anotación</h3>

				<div class="form-group">
					<label for="use">Uso</label>
					<textarea class="form-control" name="use" id="use" rows="2" placeholder="Uso" maxlength="255"><?php echo $object->objectUse ?></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Clasificación</h3>

				<div class="form-group">
					<label for="knowless_topic">Área del conocimiento</label>
					<input type="text" class="form-control" name="knowless_topic" id="knowless_topic" value="<?php echo $object->objectKnowlessTopic ?>" placeholder="Área del conocimiento">
				</div>
				<div class="form-group">
					<label for="hosting">Localización</label>
					<input type="text" class="form-control" name="hosting" id="hosting" value="<?php echo $object->objectHosting ?>" placeholder="Localización">
				</div>
				<div class="form-group">
					<label for="clasification">Clasificación</label>
					<textarea class="form-control" name="clasification" id="clasification" rows="2" placeholder="Clasificación" maxlength="255"><?php echo $object->objectClasification ?></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Otros</h3>

				<div class="form-group">
					<label for="is_active">Activo</label>
					<select class="form-control" name="is_active" id="is_active">
						<option value="0" <?php if ($object->isObjectActive == '0') { echo 'selected'; } ?>>No</option>
						<option value="1" <?php if ($object->isObjectActive == '1') { echo 'selected'; } ?>>Si</option>
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