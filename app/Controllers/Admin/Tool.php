<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Entities\ToolEntity;
use App\Entities\UserEntity;
use CodeIgniter\Exceptions\PageNotFoundException;

class Tool extends BaseController
{
	public function index()
	{
		$model = model('ToolsModel');

		return view('Admin/tool/tools', [
			'tools' => $model
				->orderBy('toolName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('RolesModel');

		return view('Admin/tool/new_tool', [
			'roles' => $model->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
	}

	public function create()
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

		$user = new ToolEntity($this->request->getPost());
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

	public function get(string $id)
	{
		$modelTools = model('ToolsModel');
		$modelRoles = model('RolesModel');

		if (!$tool = $modelTools->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		$role = $modelRoles->where('_id', $tool->toolRole)->first();

		return view('Admin/tool/tool', [
			'tool' => $tool,
			'role' => $role
		]);
	}

	public function edit(string $id)
	{
		$modelTools = model('ToolsModel');
		$modelRoles = model('RolesModel');

		if (!$tool = $modelTools->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/tool/edit_tool', [
			'tool' => $tool,
			'roles' => $modelRoles->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
	}

	public function update()
	{
		$model = model('Model');

		return view('Admin/tool/');
	}

	public function delete()
	{
		//
	}
}
