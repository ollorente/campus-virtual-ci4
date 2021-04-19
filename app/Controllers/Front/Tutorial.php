<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Tutorial extends BaseController
{
	public function teachers()
	{
		return view('Front/tutoriales-para-docentes');
	}

	public function students()
	{
		return view('Front/tutoriales-para-estudiantes');
	}
}
