<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class About extends BaseController
{
	public function index()
	{
		return view('Front/quienes-somos');
	}
}
