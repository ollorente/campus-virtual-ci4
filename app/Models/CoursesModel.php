<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\CourseEntity;

class CoursesModel extends Model
{
	protected $table                = 'courses';
	protected $primaryKey           = '_id';

	protected $returnType           = CourseEntity::class;
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['courseName', 'courseNameUrl', 'isCourseActive'];

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
	protected $cleanValidationRules = true;}
