<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Elearning extends BaseController
{
	public function index()
	{
		$model = model('ObjectsModel');

		return view('Admin/objects');
	}

	public function new()
	{
		$model = model('ObjectsModel');

		return view('Admin/new_object');
	}

	public function create()
	{
		$model = model('ObjectsModel');

		return view('Admin/objects');
	}

	public function get(string $id)
	{
		$model = model('ObjectsModel');

		return view('Admin/object');
	}

	public function edit(string $id)
	{
		$model = model('ObjectsModel');

		return view('Admin/edit_object');
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
