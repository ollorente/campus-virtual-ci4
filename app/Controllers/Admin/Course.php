<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Course extends BaseController
{
	public function index()
	{
		$model = model('CoursesModel');

		return view('Admin/courses');
	}

	public function new()
	{
		$model = model('CoursesModel');

		return view('Admin/new_course');
	}

	public function create()
	{
		$model = model('CoursesModel');

		return view('Admin/courses');
	}

	public function get(string $id)
	{
		$model = model('CoursesModel');

		return view('Admin/course');
	}

	public function edit(string $id)
	{
		$model = model('CoursesModel');

		return view('Admin/edit_course');
	}

	public function update()
	{
		$model = model('CoursesModel');

		return view('Admin/course');
	}

	public function delete(string $id)
	{
		$model = model('CoursesModel');

		return view('Admin/courses');
	}
}
