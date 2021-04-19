<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Taxonomyresource extends BaseController
{
	public function index()
	{
		return view('Front/banco-de-recursos-categorias');
	}

	public function getTaxonomyResource()
	{
		return view('Front/banco-de-recursos-categoria');
	}
}
