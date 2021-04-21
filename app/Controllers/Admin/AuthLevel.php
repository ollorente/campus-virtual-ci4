<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class AuthLevel extends BaseController
{
	public function index()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/settingAuthLevels', [
			'authLevels' => $model
				->orderBy('name', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/settingNewAuthLevel');
	}

	public function create()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/settingAuthLevels');
	}

	public function get(string $id)
	{
		$model = model('AuthLevelsModel');

		return view('Admin/settingAuthLevel');
	}

	public function edit(string $id)
	{
		$model = model('AuthLevelsModel');

		if (!$level = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/settingEditAuthLevel', [
			'authLevel' => $level
		]);
	}

	public function update()
	{
		$model = model('AuthLevelsModel');

		return view('Admin/settingAuthLevel');
	}

	public function delete(string $id)
	{
		$model = model('AuthLevelsModel');

		return view('Admin/settingAuthLevels');
	}
}
