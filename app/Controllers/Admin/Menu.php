<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Menu extends BaseController
{
	public function index()
	{
		$model = model('MenusModel');

		return view('Admin/settingMenus', [
			'menus' => $model
				->orderBy('menuName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('RolesModel');

		return view('Admin/settingNewMenu', [
			'roles' => $model->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
	}

	public function create()
	{
		$model = model('MenusModel');

		return view('Admin/settingMenus');
	}

	public function get(string $id)
	{
		$model = model('MenusModel');

		if (!$menu = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/settingMenu', [
			'menu' => $menu
		]);
	}

	public function edit(string $id)
	{
		$modelMenu = model('MenusModel');
		$modelRoles = model('RolesModel');

		if (!$menu = $modelMenu->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/settingEditMenu', [
			'menu' => $menu,
			'roles' => $modelRoles->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
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
