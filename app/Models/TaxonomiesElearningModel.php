<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\TaxonomyElearningEntity;

class TaxonomiesElearningModel extends Model
{
	protected $table                = 'objecttaxonomies';
	protected $primaryKey           = '_id';

	protected $returnType           = TaxonomyElearningEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['objectTaxonomyName', 'objectTaxonomySlug', 'isObjectTaxonomyActive'];

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
