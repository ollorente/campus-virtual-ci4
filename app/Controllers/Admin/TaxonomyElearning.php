<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class TaxonomyElearning extends BaseController
{
	public function index()
	{
		$model = model('TaxonomiesElearningsModel');

		return view('Admin/settingObjects', [
			'objecttaxonomies' => $model
				->orderBy('objectTaxonomyName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('TaxonomiesElearningsModel');

		return view('Admin/settingNewObject');
	}

	public function create()
	{
		$model = model('TaxonomiesElearningsModel');

		return view('Admin/settingObjects');
	}

	public function get(string $id)
	{
		$modelTaxonomyElearnings = model('TaxonomiesElearningsModel');

		if (!$taxonomy = $modelTaxonomyElearnings->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/settingObject', [
			'objecttaxonomies' =>  $taxonomy
		]);
	}

	public function edit(string $id)
	{
		$modelTaxonomyElearnings = model('TaxonomiesElearningsModel');

		if (!$taxonomy = $modelTaxonomyElearnings->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/settingEditObject', [
			'objecttaxonomies' =>  $taxonomy
		]);
	}

	public function update()
	{
		$model = model('TaxonomiesElearningsModel');

		return view('Admin/object');
	}

	public function delete(string $id)
	{
		$model = model('TaxonomiesElearningsModel');

		return view('Admin/settingObjects');
	}
}
