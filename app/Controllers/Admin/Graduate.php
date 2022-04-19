<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Entities\GraduateEntity;

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

		$data = new GraduateEntity($this->request->getPost());
		$data->graduateName = $this->request->getVar('name');
		$data->graduateNameUrl = $this->request->getVar('url');
		$data->isGraduateActive = $this->request->getVar('is_active');

		$model = model('GraduatesModel');
		$model->save($data);

		return redirect()
			->route('admin_graduates')
			->with('msg', [
				'type' => 'success',
				'title' => 'Felicitaciones',
				'body' => '¡Ítem agregado con éxito!',
			]);
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
