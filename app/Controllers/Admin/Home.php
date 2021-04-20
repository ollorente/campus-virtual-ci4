<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		return view('Admin/login');
	}

	public function signin()
	{
		if (!$this->validate([
			'email'	 => 'required|valid_email',
			'passwd' => 'required',
		])) {
			return redirect()
				->back()
				->withInput()
				->with('errors', $this->validator->getErrors());
		};

		$email = trim($this->request->getVar('email'));
		$passwd = trim($this->request->getVar('passwd'));

		$model = model('UsersModel');

		if (!$user = $model->getUserBy('email', $email)) {
			return redirect()
				->back()
				->with('msg', [
					'type' => 'danger',
					'title' => 'Error',
					'body' => 'Este usuario no se encuentra en el sistema',
				]);
		}

		if (!password_verify($passwd, $user->passwd)) {
			return redirect()
				->back()
				->with('msg', [
					'type' => 'danger',
					'title' => 'Error',
					'body' => '¡Credenciales inválidas!',
				]);
		}

		session()->set([
			'id_user' => $user->_id,
			'username' => $user->username,
			'is_logged' => true,
		]);

		return redirect()
			->route('admin_dash')
			->with('msg', [
				'type' => 'is-success',
				'title' => 'success',
				'body' => '¡Bienvenido nuevamente <b style="text-transform: uppercase;">' . $user->username . '</b>!',
			]);
	}

	public function dashboard()
	{
		return view('Admin/home');
	}

	public function signout()
	{
		session()->destroy();

		return redirect()
			->route('admin_home');
	}
}
