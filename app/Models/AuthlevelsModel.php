<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthlevelsModel extends Model
{
	protected $table                = 'authlevels';
	protected $primaryKey           = '_id';

	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['name'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';
}
