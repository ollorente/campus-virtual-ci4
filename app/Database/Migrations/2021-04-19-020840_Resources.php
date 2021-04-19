<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Resources extends Migration
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
			'resourceArea'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 110,
				'null'				=> true,
			],
			'resourceKnowlessTopic'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 110,
				'null'				=> true,
			],
			'resourceLink'			=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'resourceKeyWords'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 200,
				'null'				=> true,
			],
			'resourceFormat'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 30,
				'null'				=> true,
			],
			'resourceEntities'		=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'resourceCreatedAt'		=> [
				'type'				=> 'DATETIME',
			],
			'resourceCost'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 110,
				'null'				=> true,
			],
			'resourceRights'		=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'resourceTaxonomy'		=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'null'				=> true,
			],
			'resourceCode'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 20,
				'unique'			=> true,
			],
			'resourceViews'			=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'default'			=> 0,
			],
			'resourceCodeAccess'	=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'default'			=> 0,
			],
			'isResourceActive'		=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->addForeignKey('resourceTaxonomy', 'resourcetaxonomies', '_id', 'CASCADE', 'SET NULL');
		$this->forge->createTable('resources');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('resources');
	}
}
