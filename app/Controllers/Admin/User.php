<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
	public function index()
	{
		$model = model('UsersModel');

		return view('Admin/settingUsers');
	}

	public function new()
	{
		$model = model('UsersModel');

		return view('Admin/settingNewUser');
	}

	public function create()
	{
		$model = model('UsersModel');

		return view('Admin/settingUsers');
	}

	public function get(string $id)
	{
		$model = model('UsersModel');

		return view('Admin/settingUser');
	}

	public function edit(string $id)
	{
		$model = model('UsersModel');

		return view('Admin/settingEditUser');
	}

	public function update()
	{
		$model = model('UsersModel');

		return view('Admin/settingUser');
	}

	public function delete(string $id)
	{
		$model = model('UsersModel');

		return view('Admin/settingUsers');
	}
}
