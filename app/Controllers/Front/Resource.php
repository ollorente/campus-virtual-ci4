<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Resource extends BaseController
{
	public function index()
	{
		return view('Front/banco-de-recursos');
	}

	public function getResource()
	{
		return view('Front/recurso');
	}
}
