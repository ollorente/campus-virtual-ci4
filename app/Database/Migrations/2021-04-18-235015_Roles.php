<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'_id'					=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'auto_increment'	=> true,
				'null'				=> false,
			],
			'roleName'				=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '20',
				'null'				=> false,
			],
			'roleNameUrl'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '20',
				'null'				=> true,
			],
			'roleImage'				=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> '255',
				'null'				=> true,
			],
			'roleOrder'				=> [
				'type'				=> 'INT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 0,
			],
			'isRoleActive'			=> [
				'type'				=> 'INT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('roles');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('roles');
	}
}
