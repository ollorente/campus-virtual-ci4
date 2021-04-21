<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Role extends BaseController
{
	public function index()
	{
		$model = model('RolesModel');

		return view('Admin/role/settingRoles', [
			'roles' => $model
				->orderBy('roleName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		return view('Admin/role/settingNewRole');
	}

	public function create()
	{
		$model = model('RolesModel');

		return view('Admin/role/roles');
	}

	public function get(string $id)
	{
		$model = model('RolesModel');

		if (!$role = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/role/settingRole', [
			'role' => $role
		]);
	}

	public function edit(string $id)
	{
		$model = model('RolesModel');

		if (!$role = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/role/settingEditRole', [
			'role' => $role
		]);
	}

	public function update()
	{
		$model = model('RolesModel');

		return view('Admin/role/role');
	}

	public function delete(string $id)
	{
		$model = model('RolesModel');

		return view('Admin/role/roles');
	}
}
