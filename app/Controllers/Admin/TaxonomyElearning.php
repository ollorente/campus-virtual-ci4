<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class TaxonomyElearning extends BaseController
{
	public function index()
	{
		$model = model('TaxonomyElearningModel');

		return view('Admin/objects');
	}

	public function new()
	{
		$model = model('TaxonomyElearningModel');

		return view('Admin/new_object');
	}

	public function create()
	{
		$model = model('TaxonomyElearningModel');

		return view('Admin/objects');
	}

	public function get(string $id)
	{
		$model = model('TaxonomyElearningModel');

		return view('Admin/object');
	}

	public function edit(string $id)
	{
		$model = model('TaxonomyElearningModel');

		return view('Admin/edit_object');
	}

	public function update()
	{
		$model = model('TaxonomyElearningModel');

		return view('Admin/object');
	}

	public function delete(string $id)
	{
		$model = model('TaxonomyElearningModel');

		return view('Admin/objects');
	}
}
