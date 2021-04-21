<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Entities\ObjectEntity;

class Elearning extends BaseController
{
	public function index()
	{
		$model = model('ObjectsModel');

		return view('Admin/object/objects', [
			'objects' => $model
				->orderBy('objectTitle', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('TaxonomiesElearningsModel');

		return view('Admin/object/new_object', [
			'taxonomies' => $model->where('isObjectTaxonomyActive', 1)->orderBy('objectTaxonomyName', 'ASC')->findAll()
		]);
	}

	public function create()
	{
		if (!$this->validate([
			'object'			=> 'required|max_length[255]',
			'area'				=> 'max_length[110]',
			'knowless_topic'	=> 'max_length[110]',
			'hosting'			=> 'max_length[150]',
			'title'				=> 'max_length[200]',
			'language'			=> 'max_length[110]',
			'keyWords'			=> 'max_length[200]',
			'youtube'			=> 'max_length[30]',
			'format'			=> 'max_length[30]',
			'size'				=> 'max_length[30]',
			'topic'				=> 'max_length[150]',
			'interactivity'		=> 'max_length[50]',
			'cost'				=> 'max_length[110]',
			'taxonomy'			=> 'required|alpha_numeric|max_length[11]',
			'is_active'			=> 'required|alpha_numeric|max_length[1]'
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

		$data = new ObjectEntity($this->request->getPost());
		$data->objectObject = $this->request->getVar('object');
		$data->objectArea = $this->request->getVar('area');
		$data->objectKnowlessTopic = $this->request->getVar('knowless_topic');
		$data->objectHosting = $this->request->getVar('hosting');
		$data->objectTitle = $this->request->getVar('title');
		$data->objectDescription = $this->request->getVar('description');
		$data->objectLanguage = $this->request->getVar('language');
		$data->objectKeyWords = $this->request->getVar('keyWords');
		$data->objectLink = $this->request->getVar('link');
		$data->objectYoutube = $this->request->getVar('youtube');
		$data->objectFormat = $this->request->getVar('format');
		$data->objectSize = $this->request->getVar('size');
		$data->objectRequirement = $this->request->getVar('requirement');
		$data->objectInstructions = $this->request->getVar('instructions');
		$data->objectVersion = $this->request->getVar('version');
		$data->objectContributors = $this->request->getVar('contributors');
		$data->objectEntities = $this->request->getVar('entities');
		$data->objectCreatedAt = $this->request->getVar('created_at');
		$data->objectTopic = $this->request->getVar('topic');
		$data->objectInteractivity = $this->request->getVar('interactivity');
		$data->objectCost = $this->request->getVar('cost');
		$data->objectRights = $this->request->getVar('rights');
		$data->objectUse = $this->request->getVar('use');
		$data->objectClasification = $this->request->getVar('clasification');
		$data->objectTaxonomy = $this->request->getVar('taxonomy');
		$data->objectViews = 0;
		$data->isObjectActive = $this->request->getVar('is_active');

		$model = model('ObjectsModel');
		$model->save($data);

		return redirect()
			->route('admin_objects')
			->with('msg', [
				'type' => 'success',
				'title' => 'Felicitaciones',
				'body' => '¡País agregado con éxito!',
			]);
	}

	public function get(string $id)
	{
		$modelObjects = model('ObjectsModel');
		$modelTaxonomyElearnings = model('TaxonomiesElearningsModel');

		if (!$object = $modelObjects->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		$taxonomy = $modelTaxonomyElearnings->where('_id', $object->objectTaxonomy)->first();

		return view('Admin/object/object', [
			'object' => $object,
			'taxonomy' => $taxonomy
		]);
	}

	public function edit(string $id)
	{
		$modelObjects = model('ObjectsModel');
		$modelTaxonomyElearnings = model('TaxonomiesElearningsModel');

		if (!$object = $modelObjects->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/object/edit_object', [
			'object' => $object,
			'taxonomies' => $modelTaxonomyElearnings->where('isObjectTaxonomyActive', 1)->orderBy('objectTaxonomyName', 'ASC')->findAll()
		]);
	}

	public function update()
	{
		$model = model('ObjectsModel');

		return view('Admin/object/object');
	}

	public function delete(string $id)
	{
		$model = model('ObjectsModel');

		return view('Admin/object/objects');
	}
}
