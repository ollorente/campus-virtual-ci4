<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Graduates extends Migration
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
			'graduateName'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'graduateNameUrl'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'isGraduateActive'		=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('graduates');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('graduates');
	}
}
