<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\UserEntity;

class UsersModel extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = '_id';

	protected $returnType           = UserEntity::class;
	protected $useSoftDelete        = false;

	protected $allowedFields        = [
		'username',
		'email',
		'auth_level',
		'banned',
		'passwd',
		'passwd_recovery_code',
		'passwd_recovery_date',
		'passwd_modified_at',
		'last_login',
	];

	// Dates
	protected $useTimestamps			= true;
	protected $passwdRecoveryDateField	= 'passwd_recovery_date';
	protected $passwdMdifiedField		= 'passwd_modified_at';
	protected $lastLoginField			= 'last_login';
	protected $createdField				= 'created_at';
	protected $modifiedField			= 'modified_at';
	protected $updatedField				= 'updated_at';

	// Validation
	protected $validationRules			= [
		'username'	=> 'required|alpha_numeric|max_length[40]',
		'email'		=> 'required|valid_email|max_length[80]',
		'passwd'	=> 'required|min_length[8]|max_length[255]',
	];
	protected $validationMessages   = [];
	protected $skipValidation       = true;
	protected $cleanValidationRules = false;

	protected $beforeInsert = ['addGroup'];

	protected $assignGroup;

	protected function addGroup($data)
	{
		$data['data']['auth_level'] = $this->assignGroup;
		return $data;
	}

	public function withGroup(string $group)
	{
		$row = $this->db->table('authlevels')
			->where('name', $group)
			->get()
			->getFirstRow();

		if ($row != null) {
			$this->assignGroup = $row->_id;
		}
	}

	public function getUserBy(string $column, string $value)
	{
		$model = model('UsersModel');

		return $model->where($column, $value)->first();
	}
}
