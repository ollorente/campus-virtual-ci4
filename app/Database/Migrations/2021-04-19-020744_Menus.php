<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menus extends Migration
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
			'menuName'				=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'menuNameUrl'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'menuRole'				=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'null'				=> true,
			],
			'menuOrder'				=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 2,
				'unsigned'			=> true,
				'default'			=> 0,
			],
			'isMenuActive'			=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->addForeignKey('menuRole', 'roles', '_id', 'CASCADE', 'SET NULL');
		$this->forge->createTable('menus');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('menus');
	}
}
