<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\ProgramEntity;

class ProgramsModel extends Model
{
	protected $table                = 'programs';
	protected $primaryKey           = '_id';

	protected $returnType           = ProgramEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['programName', 'programNameUrl', 'isProgramActive'];

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
