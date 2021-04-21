<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Graduate extends BaseController
{
	public function index()
	{
		$model = model('GraduatesModel');

		return view('Admin/graduate/graduates', [
			'graduates' => $model
				->orderBy('graduateName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		return view('Admin/graduate/new_graduate');
	}

	public function create()
	{
		$model = model('GraduatesModel');

		return view('Admin/graduate/graduates');
	}

	public function get(string $id)
	{
		$model = model('GraduatesModel');

		if (!$graduate = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/graduate/graduate', [
			'graduate' => $graduate
		]);
	}

	public function edit(string $id)
	{
		$model = model('GraduatesModel');

		if (!$graduate = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/graduate/edit_graduate', [
			'graduate' => $graduate
		]);
	}

	public function update()
	{
		$model = model('GraduatesModel');

		return view('Admin/graduate/graduate');
	}

	public function delete(string $id)
	{
		$model = model('GraduatesModel');

		return view('Admin/graduate/graduates');
	}
}
