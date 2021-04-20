<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Graduate extends BaseController
{
	public function index()
	{
		$model = model('GraduatesModel');

		return view('Admin/graduates');
	}

	public function new()
	{
		$model = model('GraduatesModel');

		return view('Admin/graduates');
	}

	public function create()
	{
		$model = model('GraduatesModel');

		return view('Admin/graduates');
	}

	public function get(string $id)
	{
		$model = model('GraduatesModel');

		return view('Admin/graduate');
	}

	public function edit(string $id)
	{
		$model = model('GraduatesModel');

		return view('Admin/edit_graduate');
	}

	public function update()
	{
		$model = model('GraduatesModel');

		return view('Admin/graduate');
	}

	public function delete(string $id)
	{
		$model = model('GraduatesModel');

		return view('Admin/graduates');
	}
}
