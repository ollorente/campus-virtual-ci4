<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'_id' => [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'auto_increment'	=> true,
				'null'				=> false,
			],
			'username' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> '40',
				'null'				=> false,
				'unique'			=> true,
			],
			'email' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> '80',
				'null'				=> false,
				'unique'			=> true,
			],
			'auth_level'			=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'null'				=> false,
			],
			'banned'				=> [
				'type'				=> 'ENUM("0","1")',
				'default'			=> '0',
				'null'				=> FALSE,
			],
			'passwd' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> '255',
				'null'				=> false,
			],
			'passwd_recovery_code'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 60,
				'null'				=> true,
			],
			'passwd_recovery_date'	=> [
				'type'				=> 'DATETIME',
				'null'				=> true,
			],
			'passwd_modified_at'	=> [
				'type'				=> 'DATETIME',
				'null'				=> true,
			],
			'last_login'			=> [
				'type'				=> 'DATETIME',
				'null'				=> true,
			],
			'created_at'			=> [
				'type'				=> 'DATETIME',
				'null'				=> false,
			],
			'updated_at'			=> [
				'type'				=> 'DATETIME',
				'null'				=> true,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->addForeignKey('auth_level', 'authlevels', '_id', 'CASCADE', 'SET NULL');
		$this->forge->createTable('users');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
