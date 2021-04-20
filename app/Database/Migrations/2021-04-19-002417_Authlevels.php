<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Authlevels extends Migration
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
			'name' => [
				'type'				=> 'VARCHAR',
				'constraint'		=> '40',
				'null'				=> false,
				'unique'			=> true,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('authlevels');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('authlevels');
	}
}
