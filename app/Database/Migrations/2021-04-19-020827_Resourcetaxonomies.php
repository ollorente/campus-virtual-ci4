<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resourcetaxonomies extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'_id' => [
				'type'					=> 'INT',
				'constraint'			=> 11,
				'unsigned'				=> true,
				'auto_increment'		=> true,
				'null'					=> false,
			],
			'resourceTaxonomyName'		=> [
				'type'					=> 'VARCHAR',
				'constraint'			=> 255,
				'null'					=> true,
			],
			'resourceTaxonomySlug'		=> [
				'type'					=> 'VARCHAR',
				'constraint'			=> 255,
			],
			'isResourceTaxonomyActive'	=> [
				'type'					=> 'TINYINT',
				'constraint'			=> 1,
				'unsigned'				=> true,
				'default'				=> 1,
			],

		]);
		$this->forge->addKey('_id', true);
		$this->forge->createTable('resourcetaxonomies');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('resourcetaxonomies');
	}
}
