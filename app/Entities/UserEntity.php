<?php

namespace App\Entities;

use CodeIgniter\Entity;

class UserEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'passwd_recovery_date',
		'passwd_modified_at',
		'last_login',
		'created_at',
		'modified_at',
	];
	protected $casts   = [];

	protected function setPassword(string $password)
	{
		$this->attributes['passwd'] = password_hash($password, PASSWORD_BCRYPT);
	}

	public function generateUsername()
	{
		$this->attributes['username'] = explode("@", $this->email)[0];
	}
}
