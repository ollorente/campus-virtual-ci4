<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use App\Entities\MenuEntity;

class Menu extends BaseController
{
	public function index()
	{
		$model = model('MenusModel');

		return view('Admin/menu/settingMenus', [
			'menus' => $model
				->orderBy('menuName', 'ASC')
				->paginate(config('Blog')->regPerPage),
			'pager' => $model->pager
		]);
	}

	public function new()
	{
		$model = model('RolesModel');

		return view('Admin/menu/settingNewMenu', [
			'roles' => $model->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
	}

	public function create()
	{
		if (!$this->validate([
			'name' => 'required|max_length[255]',
			'url' => 'required|max_length[255]',
			'role' => 'required|alpha_numeric|max_length[1]',
			'order' => 'alpha_numeric|max_length[1]',
			'is_active' => 'required|alpha_numeric|max_length[1]',
		])) {
			return redirect()
				->back()
				->withInput()
				->with('msg', [
					'type' => 'danger',
					'body' => 'Tienes campos incorrectos',
				])
				->with('errors', $this->validator->getErrors());
		}

		$data = new MenuEntity($this->request->getPost());
		$data->menuName = $this->request->getVar('name');
		$data->menuNameUrl = $this->request->getVar('url');
		$data->menuRole = $this->request->getVar('role');
		$data->menuOrder = $this->request->getVar('order');
		$data->isMenuActive = $this->request->getVar('is_active');

		$model = model('MenusModel');
		$model->save($data);

		return redirect()
			->route('admin_setting_menus')
			->with('msg', [
				'type' => 'success',
				'title' => 'Felicitaciones',
				'body' => '¡Ítem agregado con éxito!',
			]);
	}

	public function get(string $id)
	{
		$model = model('MenusModel');

		if (!$menu = $model->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/menu/settingMenu', [
			'menu' => $menu
		]);
	}

	public function edit(string $id)
	{
		$modelMenu = model('MenusModel');
		$modelRoles = model('RolesModel');

		if (!$menu = $modelMenu->where('_id', $id)->first()) {
			throw PageNotFoundException::forPageNotFound();
		}

		return view('Admin/menu/settingEditMenu', [
			'menu' => $menu,
			'roles' => $modelRoles->where('isRoleActive', 1)->orderBy('roleName', 'ASC')->findAll()
		]);
	}

	public function update()
	{
		$model = model('MenusModel');

		return view('Admin/menu/settingMenu');
	}

	public function delete(string $id)
	{
		$model = model('MenusModel');

		return view('Admin/menu/settingMenus');
	}
}
