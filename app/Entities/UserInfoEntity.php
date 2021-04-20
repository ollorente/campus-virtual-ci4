<?php

namespace App\Entities;

use CodeIgniter\Entity;

class UserInfoEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = ['passwd_recovery_date', 'passwd_modified_at', 'last_login', 'created_at', 'updated_at'];
	protected $casts   = [];

}