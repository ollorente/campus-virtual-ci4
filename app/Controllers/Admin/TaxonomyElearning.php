<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Entities\TaxonomyElearningEntity;

class TaxonomyElearning extends BaseController
{
	public function index()
	{
		$model = model('TaxonomyElearningsModel');

		return view('Admin/object/settingObjects', [
			'objecttaxonomies' => $model
				->orderBy('objectTaxonomyName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('TaxonomyElearningsModel');

		return view('Admin/object/settingNewObject');
	}

	public function create()
	{
		if (!$this->validate([
			'name' => 'required|max_length[255]',
			'slug' => 'required|max_length[255]',
			'is_active' => 'required|alpha_numeric|max_length[1]',
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

		$data = new TaxonomyElearningEntity($this->request->getPost());
		$data->objectTaxonomyName = $this->request->getVar('name');
		$data->objectTaxonomySlug = $this->request->getVar('slug');
		$data->isObjectTaxonomyActive = $this->request->getVar('is_active');

		$model = model('TaxonomyElearningsModel');
		$model->save($data);

		return redirect()
			->route('admin_setting_objects')
			->with('msg', [
				'type' => 'success',
				'title' => 'Felicitaciones',
				'body' => '¡Ítem agregado con éxito!',
			]);
	}

	public function get(string $id)
	{
		$modelTaxonomyElearnings = model('TaxonomyElearningsModel');

		if (!$taxonomy = $modelTaxonomyElearnings->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/object/settingObject', [
			'objecttaxonomies' =>  $taxonomy
		]);
	}

	public function edit(string $id)
	{
		$modelTaxonomyElearnings = model('TaxonomyElearningsModel');

		if (!$taxonomy = $modelTaxonomyElearnings->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/object/settingEditObject', [
			'objecttaxonomies' =>  $taxonomy
		]);
	}

	public function update()
	{
		$model = model('TaxonomyElearningsModel');

		return view('Admin/object/object');
	}

	public function delete(string $id)
	{
		$model = model('TaxonomyElearningsModel');

		return view('Admin/object/settingObjects');
	}
}
