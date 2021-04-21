<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Program extends BaseController
{
	public function index()
	{
		$model = model('ProgramsModel');

		return view('Admin/program/programs', [
			'programs' => $model
				->orderBy('programName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		return view('Admin/program/new_program');
	}

	public function create()
	{
		$model = model('ProgramsModel');

		return view('Admin/program/programs');
	}

	public function get(string $id)
	{
		$model = model('ProgramsModel');

		if (!$program = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/program/program', [
			'program' => $program
		]);
	}

	public function edit(string $id)
	{
		$model = model('ProgramsModel');

		if (!$program = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/program/edit_program', [
			'program' => $program
		]);
	}

	public function update()
	{
		$model = model('ProgramsModel');

		return view('Admin/program/program');
	}

	public function delete(string $id)
	{
		$model = model('ProgramsModel');

		return view('Admin/program/programs');
	}
}
