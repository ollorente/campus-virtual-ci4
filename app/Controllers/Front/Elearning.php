<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Elearning extends BaseController
{
	public function index()
	{
		return view('Front/objetos-de-aprendizaje');
	}

	public function getObject()
	{
		return view('Front/objeto-de-aprendizaje');
	}
}
