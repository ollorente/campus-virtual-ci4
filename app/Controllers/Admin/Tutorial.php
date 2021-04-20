<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Tutorial extends BaseController
{
	public function index()
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorials', [
			'tutorials' => $model
				->orderBy('isTutorialLock', 0)
				->orderBy('tutorialTitle', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('TutorialsModel');

		return view('Admin/new_tutorial');
	}

	public function create()
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorials');
	}

	public function get(string $id)
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorial');
	}

	public function edit(string $id)
	{
		$model = model('TutorialsModel');

		return view('Admin/edit_tutorial');
	}

	public function update()
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorial');
	}

	public function delete(string $id)
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorials');
	}
}
