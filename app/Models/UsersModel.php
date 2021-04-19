<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\UserEntity;

class UsersModel extends Model
{
	protected $table                = 'users';
	protected $primaryKey           = '_id';

	protected $returnType           = UserEntity::class;
	protected $useSoftDelete        = false;

	protected $allowedFields        = [
		'username',
		'email',
		'auth_level',
		'banned',
		'passwd',
		'passwd_recovery_code',
		'passwd_recovery_date',
		'passwd_modified_at',
		'last_login'
	];

	// Dates
	protected $useTimestamps			= true;
	protected $dateFormat				= 'datetime';
	protected $passwdRecoveryDateField	= 'passwd_recovery_date';
	protected $passwdMdifiedField		= 'passwd_modified_at';
	protected $lastLoginField			= 'last_login';
	protected $createdField				= 'created_at';
	protected $modifiedField			= 'modified_at';

	// Validation
	protected $validationRules			= [
		'username'	=> 'required|alpha_numeric|max_length[40]',
		'email'		=> 'required|is_valid_email|max_length[80]',
		'passwd'	=> 'required|min_length[8]|max_length[255]',
	];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;
}
