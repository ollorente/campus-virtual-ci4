<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class User extends BaseController
{
	public function index()
	{
		$model = model('UsersModel');

		return view('Admin/settingUsers', [
			'users' => $model
				->orderBy('username', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/settingNewUser', [
			'authLevels' => $model->orderBy('name', 'ASC')->findAll()
		]);
	}

	public function create()
	{
		$model = model('UsersModel');

		return view('Admin/settingUsers');
	}

	public function get(string $id)
	{
		$modelUsers = model('UsersModel');
		$modelAuthLevels = model('AuthLevelsModel');

		if (!$user = $modelUsers->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		$authLevel = $modelAuthLevels->where('_id', $user->auth_level)->first();

		return view('Admin/settingUser', [
			'user' => $user,
			'level' => $authLevel
		]);
	}

	public function edit(string $id)
	{
		$modelUsers = model('UsersModel');
		$modelAuthLevels = model('AuthLevelsModel');

		if (!$user = $modelUsers->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/settingEditUser', [
			'user' => $user,
			'authLevels' => $modelAuthLevels->where('name != "Superusuario"')->orderBy('name', 'ASC')->findAll()
		]);
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
