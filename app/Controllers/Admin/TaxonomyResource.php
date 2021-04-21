<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class TaxonomyResource extends BaseController
{
	public function index()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resource/settingResources', [
			'resourceTaxonomies' => $model
				->orderBy('resourceTaxonomyName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		return view('Admin/resource/settingNewResource');
	}

	public function create()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resource/resources');
	}

	public function get(string $id)
	{
		$model = model('TaxonomyResourcesModel');

		if (!$taxonomy = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/resource/settingResource', [
			'resourceTaxonomy' => $taxonomy
		]);
	}

	public function edit(string $id)
	{
		$model = model('TaxonomyResourcesModel');

		if (!$taxonomy = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/resource/settingEditResource', [
			'resourceTaxonomy' => $taxonomy
		]);
	}

	public function update()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resource/resource');
	}

	public function delete(string $id)
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resource/resources');
	}
}
