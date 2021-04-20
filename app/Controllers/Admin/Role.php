<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Role extends BaseController
{
	public function index()
	{
		$model = model('RolesModel');

		return view('Admin/roles');
	}

	public function new()
	{
		$model = model('RolesModel');

		return view('Admin/new_role');
	}

	public function create()
	{
		$model = model('RolesModel');

		return view('Admin/roles');
	}

	public function get(string $id)
	{
		$model = model('RolesModel');

		return view('Admin/role');
	}

	public function edit(string $id)
	{
		$model = model('RolesModel');

		return view('Admin/edit_role');
	}

	public function update()
	{
		$model = model('RolesModel');

		return view('Admin/role');
	}

	public function delete(string $id)
	{
		$model = model('RolesModel');

		return view('Admin/roles');
	}
}
