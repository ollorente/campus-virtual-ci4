<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Tool extends BaseController
{
	public function teachers()
	{
		return view('Front/herramientas-para-docentes');
	}

	public function students()
	{
		return view('Front/herramientas-para-estudiantes');
	}
}
