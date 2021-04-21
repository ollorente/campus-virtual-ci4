<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Tutorial extends BaseController
{
	public function index()
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorial/tutorials', [
			'tutorials' => $model
				->orderBy('isTutorialLock', 0)
				->orderBy('tutorialTitle', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('RolesModel');

		return view('Admin/tutorial/new_tutorial', [
			'roles' => $model->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
	}

	public function create()
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorial/tutorials');
	}

	public function get(string $id)
	{
		$modelTutorials = model('TutorialsModel');
		$modelRoles = model('RolesModel');

		if (!$tutorial = $modelTutorials->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		$role = $modelRoles->where('_id', $tutorial->tutorialRole)->first();

		return view('Admin/tutorial/tutorial', [
			'tutorial' => $tutorial,
			'role' => $role
		]);
	}

	public function edit(string $id)
	{
		$modelTutorials = model('TutorialsModel');
		$modelRoles = model('RolesModel');

		if (!$tutorial = $modelTutorials->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/tutorial/edit_tutorial', [
			'tutorial' => $tutorial,
			'roles' => $modelRoles->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
	}

	public function update()
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorial/tutorial');
	}

	public function delete(string $id)
	{
		$model = model('TutorialsModel');

		return view('Admin/tutorial/tutorials');
	}
}
