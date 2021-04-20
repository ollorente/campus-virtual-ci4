<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ToolEntity;

class ToolsModel extends Model
{
	protected $table                = 'tools';
	protected $primaryKey           = '_id';

	protected $returnType           = ToolEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'toolName',
		'toolNameUrl',
		'toolDescription',
		'toolImageUrl',
		'toolRole',
		'isToolActive'
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
