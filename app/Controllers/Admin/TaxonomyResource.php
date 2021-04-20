<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class TaxonomyResource extends BaseController
{
	public function index()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resources');
	}

	public function new()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/new_resource');
	}

	public function create()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resources');
	}

	public function get(string $id)
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resource');
	}

	public function edit(string $id)
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/edit_resource');
	}

	public function update()
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resource');
	}

	public function delete(string $id)
	{
		$model = model('TaxonomyResourcesModel');

		return view('Admin/resources');
	}
}
