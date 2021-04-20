<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\MenuEntity;

class MenusModel extends Model
{
	protected $table                = 'menus';
	protected $primaryKey           = '_id';

	protected $returnType           = MenuEntity::class;
	protected $useSoftDelete        = false;

	protected $allowedFields        = [
		'menuName',
		'menuNameUrl',
		'menuRole',
		'menuOrder',
		'isMenuActive'
	];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
