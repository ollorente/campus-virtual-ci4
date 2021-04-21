<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Elearning extends BaseController
{
	public function index()
	{
		$model = model('ObjectsModel');

		return view('Admin/objects', [
			'objects' => $model
				->orderBy('objectTitle', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('TaxonomiesElearningsModel');

		return view('Admin/new_object', [
			'taxonomies' => $model->where('isObjectTaxonomyActive', 1)->orderBy('objectTaxonomyName', 'ASC')->findAll()
		]);
	}

	public function create()
	{
		$model = model('ObjectsModel');

		return view('Admin/objects');
	}

	public function get(string $id)
	{
		$modelObjects = model('ObjectsModel');
		$modelTaxonomyElearnings = model('TaxonomiesElearningsModel');

		if (!$object = $modelObjects->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		$taxonomy = $modelTaxonomyElearnings->where('_id', $object->objectTaxonomy)->first();

		return view('Admin/object', [
			'object' => $object,
			'taxonomy' => $taxonomy
		]);
	}

	public function edit(string $id)
	{
		$modelObjects = model('ObjectsModel');
		$modelTaxonomyElearnings = model('TaxonomiesElearningsModel');

		if (!$object = $modelObjects->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/edit_object', [
			'object' => $object,
			'taxonomies' => $modelTaxonomyElearnings->where('isObjectTaxonomyActive', 1)->orderBy('objectTaxonomyName', 'ASC')->findAll()
		]);
	}

	public function update()
	{
		$model = model('ObjectsModel');

		return view('Admin/object');
	}

	public function delete(string $id)
	{
		$model = model('ObjectsModel');

		return view('Admin/objects');
	}
}
