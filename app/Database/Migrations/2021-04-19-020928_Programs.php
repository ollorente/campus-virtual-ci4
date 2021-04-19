<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Programs extends Migration
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
			'programName'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'programNameUrl'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'isProgramActive'		=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('programs');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('programs');
	}
}
