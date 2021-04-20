<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ResourcetaxonomyEntity;

class TaxonomyResourcesModel extends Model
{
	protected $table                = 'resourcetaxonomies';
	protected $primaryKey           = '_id';

	protected $returnType           = ResourcetaxonomyEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'resourceTaxonomyName',
		'resourceTaxonomySlug',
		'isResourceTaxonomyActive',
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
