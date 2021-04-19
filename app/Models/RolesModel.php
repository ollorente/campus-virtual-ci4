<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\RoleEntity;

class RolesModel extends Model
{
	protected $table                = 'roles';
	protected $primaryKey           = '_id';

	protected $returnType           = RoleEntity::class;
	protected $useSoftDelete        = false;

	protected $allowedFields        = [
		'roleName',
		'roleNameUrl',
		'roleImage',
		'roleOrder',
		'isRoleActive'
	];

	// Validation
	protected $validationRules      = [
		'roleName'		=> 'required|min_length[3]|max_length[20]',
		'roleNameUrl'	=> 'required|min_length[3]|max_length[20]'
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
}
