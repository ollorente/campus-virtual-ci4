<?php

namespace App\Controllers\API\V1;

use App\Controllers\BaseController;

class Auth extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
}
