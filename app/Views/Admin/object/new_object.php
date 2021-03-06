<?php echo $this->extend('Admin/layouts/main') ?>

<?php // ===X=== TITLE ===X=== 
?>
<?php echo $this->section('title') ?>
Nuevo objeto
<?php echo $this->endSection('title') ?>

<?php // ===X=== CONTENT ===X=== 
?>
<?php echo $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid" id="main">

	<div class="row">
		<div class="col-12 d-flex justify-content-between align-items-center mb-4">
			<h1 class="h3 text-gray-800">Nuevo objeto</h1>
			<a href="<?php echo base_url(route_to('admin_objects')) ?>" class="btn btn-outline-secondary btn-sm" role="button">Volver</a>
		</div>

		<div class="col-12">

			<?php if (session('msg')) : ?>
			<div class="alert alert-<?= session('msg.type') ?>" role="alert" id="alert">
				<?= session('msg.body') ?>
			</div>
			<?php endif; ?>

			<form action="<?php echo base_url(route_to('admin_create_object')) ?>" method="POST">
				<hr class="mt-0" />
				<h3 class="h4 text-gray-800 mb-4">General</h3>

				<div class="form-group">
					<label for="title">Título *</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="Título *" required autofocus>
				</div>
				<div class="form-group">
					<label for="object">Slug de objeto *</label>
					<input type="text" class="form-control" name="object" id="object" placeholder="Slug de objeto *" required>
				</div>
				<div class="form-group">
					<label for="taxonomy">Taxonomía *</label>
					<select class="form-control" name="taxonomy" id="taxonomy" required>
						<option disabled selected>-- Elige una categoría --</option>
						<?php foreach ($taxonomies as $taxonomy) { ?>
							<option value="<?php echo $taxonomy->_id ?>"><?php echo $taxonomy->objectTaxonomyName ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="description">Descripción</label>
					<textarea class="form-control" name="description" id="description" rows="4" placeholder="Descripción" maxlength="255"></textarea>
				</div>
				<div class="form-group">
					<label for="link">Link de la imagen</label>
					<textarea class="form-control" name="link" id="link" rows="2" placeholder="Link de la imagen" maxlength="255"></textarea>
				</div>
				<div class="form-group">
					<label for="youtube">Link de Youtube</label>
					<input type="text" class="form-control" name="youtube" id="youtube" placeholder="Link de Youtube">
				</div>
				<div class="form-group">
					<label for="language">Idioma</label>
					<input type="text" class="form-control" name="language" id="language" placeholder="Idioma">
				</div>
				<div class="form-group">
					<label for="key_words">Palabras clave</label>
					<input type="text" class="form-control" name="key_words" id="key_words" placeholder="Palabras clave">
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Técnico</h3>

				<div class="form-group">
					<label for="format">Formato</label>
					<input type="text" class="form-control" name="format" id="format" placeholder="Formato">
				</div>
				<div class="form-group">
					<label for="size">Tamaño</label>
					<input type="text" class="form-control" name="size" id="size" placeholder="Tamaño">
				</div>
				<div class="form-group">
					<label for="requirement">Requerimientos</label>
					<textarea class="form-control" name="requirement" id="requirement" rows="3" placeholder="Requerimientos" maxlength="255"></textarea>
				</div>
				<div class="form-group">
					<label for="instructions">Instrucciones</label>
					<textarea class="form-control" name="instructions" id="instructions" rows="3" placeholder="Instrucciones" maxlength="255"></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Ciclo</h3>

				<div class="form-group">
					<label for="version">Versión</label>
					<input type="text" class="form-control" name="version" id="version" placeholder="Versión">
				</div>
				<div class="form-group">
					<label for="contributors">Contribuyentes</label>
					<textarea class="form-control" name="contributors" id="contributors" rows="3" placeholder="Contribuyentes" maxlength="255"></textarea>
				</div>
				<div class="form-group">
					<label for="entities">Entidades</label>
					<textarea class="form-control" name="entities" id="entities" rows="3" placeholder="Entidades" maxlength="255"></textarea>
				</div>
				<div class="form-group">
					<label for="created_at">Fecha de creación</label>
					<input type="date" class="form-control" name="created_at" id="created_at" placeholder="Fecha de creación">
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Educacional</h3>

				<div class="form-group">
					<label for="area">Área</label>
					<input type="text" class="form-control" name="area" id="area" placeholder="Área">
				</div>
				<div class="form-group">
					<label for="interactivity">Interactividad</label>
					<input type="text" class="form-control" name="interactivity" id="interactivity" placeholder="Interactividad">
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Derechos</h3>

				<div class="form-group">
					<label for="cost">Costo</label>
					<input type="text" class="form-control" name="cost" id="cost" placeholder="Costo">
				</div>
				<div class="form-group">
					<label for="rights">Derechos</label>
					<textarea class="form-control" name="rights" id="rights" rows="2" placeholder="Derechos" maxlength="255"></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Anotación</h3>

				<div class="form-group">
					<label for="use">Uso</label>
					<textarea class="form-control" name="use" id="use" rows="2" placeholder="Uso" maxlength="255"></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Clasificación</h3>

				<div class="form-group">
					<label for="knowless_topic">Área del conocimiento</label>
					<input type="text" class="form-control" name="knowless_topic" id="knowless_topic" placeholder="Área del conocimiento">
				</div>
				<div class="form-group">
					<label for="hosting">Localización</label>
					<input type="text" class="form-control" name="hosting" id="hosting" placeholder="Localización">
				</div>
				<div class="form-group">
					<label for="clasification">Clasificación</label>
					<textarea class="form-control" name="clasification" id="clasification" rows="2" placeholder="Clasificación" maxlength="255"></textarea>
				</div>

				<hr class="mt-4" />
				<h3 class="h4 text-gray-800 mb-4">Otros</h3>

				<div class="form-group">
					<label for="is_active">Activo</label>
					<select class="form-control" name="is_active" id="is_active">
						<option value="0">No</option>
						<option value="1" selected>Si</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Crear</button>
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