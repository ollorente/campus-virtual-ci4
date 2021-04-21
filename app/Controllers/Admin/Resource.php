<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Resource extends BaseController
{
	public function index()
	{
		$model = model('ResourcesModel');

		return view('Admin/resource/resources', [
			'resources' => $model
				->orderBy('resourceCode', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resource/new_resource', [
			'taxonomies' => $model->where('isResourceTaxonomyActive', 1)->orderBy('resourceTaxonomyName', 'ASC')->findAll()
		]);
	}

	public function create()
	{
		$model = model('ResourcesModel');

		return view('Admin/resource/resources');
	}

	public function get(string $id)
	{
		$modelResource = model('ResourcesModel');
		$modelTaxonomyResource = model('TaxonomyResourcesModel');

		if (!$resource = $modelResource->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		$taxonomy = $modelTaxonomyResource->where('_id', $resource->resourceTaxonomy)->first();

		return view('Admin/resource/resource', [
			'resource' => $resource,
			'taxonomy' => $taxonomy
		]);
	}

	public function edit(string $id)
	{
		$modelResource = model('ResourcesModel');
		$modelTaxonomyResource = model('TaxonomyResourcesModel');

		if (!$resource = $modelResource->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/resource/edit_resource', [
			'resource' => $resource,
			'taxonomies' => $modelTaxonomyResource
				->where('isResourceTaxonomyActive', 1)
				->orderBy('resourceTaxonomyName', 'ASC')
				->findAll()
		]);
	}

	public function update()
	{
		$model = model('ResourcesModel');

		return view('Admin/resource/resource');
	}

	public function delete(string $id)
	{
		$model = model('ResourcesModel');

		return view('Admin/resource/resources');
	}
}
