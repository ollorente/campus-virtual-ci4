<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class AuthLevel extends BaseController
{
	public function index()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/auth_levels');
	}

	public function new()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/new_auth_level');
	}

	public function create()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/auth_levels');
	}

	public function get(string $id)
	{
		$model = model('AuthLevelsModel');

		return view('Admin/auth_level');
	}

	public function edit(string $id)
	{
		$model = model('AuthLevelsModel');

		return view('Admin/edit_auth_level');
	}

	public function update()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/auth_level');
	}

	public function delete(string $id)
	{
		$model = model('AuthLevelsModel');

		return view('Admin/auth_levels');
	}
}
