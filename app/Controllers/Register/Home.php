<?php

namespace App\Controllers\Register;

use App\Controllers\BaseController;
use App\Entities\UserEntity;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'email'					=> 'test123@test.com',
			'passwd'				=> 'password123456',
			'auth_level'			=> 9,
			'banned'				=> '0',
			'passwd_recovery_code'	=> NULL,
			'passwd_recovery_date'	=> NULL,
			'passwd_modified_at'	=> NULL,
			'last_login'			=> NULL,
		];

		$user = new UserEntity($data);
		$user->generateUsername();
		$user->passwd = password_hash($user->passwd, PASSWORD_BCRYPT);
		d($user);

		return view('Admin/register');
	}

	public function store()
	{
		//
	}
}
