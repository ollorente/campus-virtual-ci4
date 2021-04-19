<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tools extends Migration
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
			'toolName'				=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'toolNameUrl'			=> [
				'type'				=> 'TEXT',
			],
			'toolDescription'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'toolImageUrl'			=> [
				'type'				=> 'TEXT',
			],
			'toolRole'				=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
			],
			'isToolActive'			=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],

		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('tools');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('tools');
	}
}
