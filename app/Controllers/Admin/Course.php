<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Entities\CourseEntity;

class Course extends BaseController
{
	public function index()
	{
		$model = model('CoursesModel');

		return view('Admin/course/courses', [
			'courses' => $model
				->orderBy('courseName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		return view('Admin/course/new_course');
	}

	public function create()
	{
		if (!$this->validate([
			'name' => 'required|max_length[100]',
			'url' => 'required|max_length[100]',
			'is_active' => 'required|alpha_numeric|max_length[1]',
		])) {
			return redirect()
				->back()
				->withInput()
				->with('msg', [
					'type' => 'is-danger',
					'body' => 'Tienes campos incorrectos',
				])
				->with('errors', $this->validator->getErrors());
		}

		$data = new CourseEntity($this->request->getPost());
		$data->courseName = $this->request->getVar('name');
		$data->courseNameUrl = $this->request->getVar('url');
		$data->isCourseActive = $this->request->getVar('is_active');

		$model = model('CoursesModel');
		$model->save($data);

		return redirect()
			->route('admin_courses')
			->with('msg', [
				'type' => 'success',
				'title' => 'Felicitaciones',
				'body' => '¡País agregado con éxito!',
			]);
	}

	public function get(string $id)
	{
		$model = model('CoursesModel');

		if (!$course = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/course/course', [
			'course' => $course
		]);
	}

	public function edit(string $id)
	{
		$model = model('CoursesModel');

		if (!$course = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/course/edit_course', [
			'course' => $course
		]);
	}

	public function update(string $id)
	{
		if (!$this->validate([
			'id' => 'required|is_not_unique[courses._id]',
			'courseName' => 'required|max_length[100]',
			'courseNameUrl' => 'required|max_length[100]',
			'isCourseActive' => 'required|alpha_numeric|max_length[1]',
		])) {
			return redirect()
				->back()
				->withInput()
				->with('msg', [
					'type' => 'danger',
					'body' => 'Tienes campos incorrectos',
				])
				->with('errors', $this->validator->getErrors());
		}

		$model = model('CoursesModel');

		if ($model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		$model->save([
			'_id' => trim($this->request->getVar('id')),
			'courseName' => trim($this->request->getVar('courseName')),
			'courseNameUrl' => trim($this->request->getVar('courseNameUrl')),
			'isCourseActive' => trim($this->request->getVar('isCourseActive')),
		]);

		return redirect()
			->route('admin_course', $id)
			->with('msg', [
				'type' => 'success',
				'title' => 'Felicitaciones',
				'body' => '¡País agregado con éxito!',
			]);
	}

	public function delete(string $id)
	{
		$model = model('CoursesModel');

		return view('Admin/course/courses');
	}
}
