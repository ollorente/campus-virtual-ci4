<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ResourceEntity;

class ResourcesModel extends Model
{
	protected $table                = 'resources';
	protected $primaryKey           = '_id';

	protected $returnType           = ResourceEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'resourceArea',
		'resourceKnowlessTopic',
		'resourceLink',
		'resourceKeyWords',
		'resourceFormat',
		'resourceEntities',
		'resourceCreatedAt',
		'resourceCost',
		'resourceRights',
		'resourceTaxonomy',
		'resourceCode',
		'resourceViews',
		'resourceCodeAccess',
		'isResourceActive',
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
