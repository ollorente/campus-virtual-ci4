<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$model = model('RolesModel');

		return view('Front/home', [
			'roles' => $model->orderBy('roleName', 'ASC')
		]);
	}
}
