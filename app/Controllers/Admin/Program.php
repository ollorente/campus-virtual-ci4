<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Program extends BaseController
{
	public function index()
	{
		$model = model('ProgramsModel');

		return view('Admin/programs');
	}

	public function new()
	{
		$model = model('ProgramsModel');

		return view('Admin/new_program');
	}

	public function create()
	{
		$model = model('ProgramsModel');

		return view('Admin/programs');
	}

	public function get(string $id)
	{
		$model = model('ProgramsModel');

		return view('Admin/program');
	}

	public function edit(string $id)
	{
		$model = model('ProgramsModel');

		return view('Admin/edit_program');
	}

	public function update()
	{
		$model = model('ProgramsModel');

		return view('Admin/program');
	}

	public function delete(string $id)
	{
		$model = model('ProgramsModel');

		return view('Admin/programs');
	}
}
