<?php

namespace App\Entities;

use CodeIgniter\Entity;

class RoleEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
	];
	protected $casts   = [];
}
