<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\TutorialEntity;

class TutorialsModel extends Model
{
	protected $table                = 'tutorials';
	protected $primaryKey           = '_id';

	protected $returnType           = TutorialEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
		'tutorialTitle',
		'tutorialSlug',
		'tutorialLink',
		'tutorialRole',
		'tutorialImage',
		'tutorialCreatedAt',
		'isTutorialActive',
		'isTutorialLock'
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
