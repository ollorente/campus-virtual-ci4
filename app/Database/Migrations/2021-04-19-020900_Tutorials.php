<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tutorials extends Migration
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
			'tutorialTitle'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'tutorialSlug'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'tutorialLink'			=> [
				'type'				=> 'TEXT',
			],
			'tutorialRole'			=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'null'				=> false,
			],
			'tutorialImage'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
				'null'				=> true,
			],
			'tutorialCreatedAt'		=> [
				'type'				=> 'DATETIME',
				'timestamp'			=> true,
			],
			'isTutorialActive'		=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
			'isTutorialLock'		=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 0,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('tutorials');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('tutorials');
	}
}
