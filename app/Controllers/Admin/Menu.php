<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Menu extends BaseController
{
	public function index()
	{
		$model = model('MenusModel');

		return view('Admin/settingMenus');
	}

	public function new()
	{
		$model = model('MenusModel');

		return view('Admin/settingNewMenu');
	}

	public function create()
	{
		$model = model('MenusModel');

		return view('Admin/settingMenus');
	}

	public function get(string $id)
	{
		$model = model('MenusModel');

		return view('Admin/settingMenu');
	}

	public function edit(string $id)
	{
		$model = model('MenusModel');

		return view('Admin/settingEditMenu');
	}

	public function update()
	{
		$model = model('MenusModel');

		return view('Admin/settingMenu');
	}

	public function delete(string $id)
	{
		$model = model('MenusModel');

		return view('Admin/settingMenus');
	}
}
