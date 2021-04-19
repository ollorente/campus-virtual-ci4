<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courses extends Migration
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
			'courseName'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'courseNameUrl'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
			],
			'isCourseActive'		=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('courses');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('courses');
	}
}
