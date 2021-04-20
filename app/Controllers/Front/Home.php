<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$modelRoles = model('RolesModel');
		$modelMenus = model('MenusModel');

		return view('Front/home', [
			'roles' => $modelRoles
				->where('isRoleActive = 1')
				->orderBy('roleOrder', 'ASC')
				->findAll(),
			'menu_aspire' => $modelMenus
				->where('menuRole', 2)
				->where('isMenuActive', 1)
				->orderBy('menuOrder', 'ASC')
				->findAll(),
			'menu_student' => $modelMenus
				->where('menuRole', 3)
				->where('isMenuActive', 1)
				->orderBy('menuOrder', 'ASC')
				->findAll(),
			'menu_teacher' => $modelMenus
				->where('menuRole', 4)
				->where('isMenuActive', 1)
				->orderBy('menuOrder', 'ASC')
				->findAll()
		]);
	}
}
