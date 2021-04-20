<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Taxonomyelearning extends BaseController
{
	public function index()
	{
		$model = model('TaxonomiesElearningModel');

		return view('Front/objetos-de-aprendizaje-categorias', [
			'taxonomies' => $model
				->where('isObjectTaxonomyActive', 1)
				->orderBy('objectTaxonomyName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function getTaxonomyObject(string $id)
	{
		$modelObjectTaxonomies = model('TaxonomiesElearningModel');
		$modelObjects = model('ObjectsModel');

		if (!$category = $modelObjectTaxonomies->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Front/objetos-de-aprendizaje-categoria', [
			'category' => $category,
			'objects' => $modelObjects
				->where('objectTaxonomy', $id)
				->where('isObjectActive', 1)
				->orderBy('objectTitle', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $modelObjects->pager
		]);
	}
}
