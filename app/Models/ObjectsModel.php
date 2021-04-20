<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ObjectEntity;

class ObjectsModel extends Model
{
	protected $table                = 'objects';
	protected $primaryKey           = '_id';

	protected $returnType           = ObjectEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'objectObject',
		'objectArea',
		'objectKnowlessTopic',
		'objectHosting',
		'objectTitle',
		'objectDescription',
		'objectLanguage',
		'objectKeyWords',
		'objectLink',
		'objectYoutube',
		'objectFormat',
		'objectSize',
		'objectRequirement',
		'objectInstructions',
		'objectVersion',
		'objectContributors',
		'objectEntities',
		'objectCreatedAt',
		'objectTopic',
		'objectInteractivity',
		'objectCost',
		'objectRights',
		'objectUse',
		'objectClasification',
		'objectTaxonomy',
		'objectViews',
		'isObjectActive',
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
