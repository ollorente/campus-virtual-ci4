<?php

namespace App\Controllers\Register;

use App\Controllers\BaseController;
use App\Entities\UserEntity;

class Home extends BaseController
{
	protected $configs;

	public function __construct()
	{
		$this->configs = config('Blog');
	}

	public function index()
	{
		return view('Admin/register');
	}

	public function store()
	{
		$validation = service('validation');
		$validation->setRules([
			'email'	 => 'required|valid_email|is_unique[users.email]',
			'passwd' => 'required|min_length[8]|max_length[255]|matches[passwd_confirm]',
		]);

		if (!$validation->withRequest($this->request)->run()) {
			dd($validation->getErrors());
			return redirect()
				->back()
				->withInput()
				->with('errors', $validation->getErrors());
		}

		$user = new UserEntity($this->request->getPost());
		$user->generateUsername();
		$user->passwd = password_hash($user->passwd, PASSWORD_BCRYPT);

		$model = model('UsersModel');
		$model->withGroup($this->configs->defaultGroupUsers);
		$model->save($user);

		return redirect()
			->route('admin_register')
			->with('msg', [
				'type' => 'is-success',
				'body' => '¡Usuario registrado con éxito!',
			]);
	}
}
