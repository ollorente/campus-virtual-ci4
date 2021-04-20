<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Taxonomyelearning extends BaseController
{
	public function index()
	{
		$model = model('TaxonomiesElearningModel');

		return view('Front/objetos-de-aprendizaje-categorias', [
			'taxonomies' => $model
				->where('isObjectTaxonomyActive', 1)
				->orderBy('objectTaxonomyName', 'ASC')
				->findAll()
		]);
	}

	public function getTaxonomyObject()
	{
		return view('Front/objeto-de-aprendizaje');
	}
}
