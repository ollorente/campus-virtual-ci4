<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Taxonomyelearning extends BaseController
{
	public function index()
	{
		return view('Front/objetos-de-aprendizaje-categorias');
	}

	public function getTaxonomyObject()
	{
		return view('Front/objetos-de-aprendizaje-categoria');
	}
}
