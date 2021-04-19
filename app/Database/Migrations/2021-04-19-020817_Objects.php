<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Objects extends Migration
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
			'objectObject'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
				'unique'			=> true,
			],
			'objectArea'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 110,
				'null'				=> true,
			],
			'objectKnowlessTopic'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 110,
				'null'				=> true,
			],
			'objectHosting'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 150,
				'null'				=> true,
			],
			'objectTitle'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 200,
			],
			'objectDescription'		=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectLanguage'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 110,
				'null'				=> true,
			],
			'objectKeyWords'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 200,
				'null'				=> true,
			],
			'objectLink'			=> [
				'type'				=> 'TEXT',
			],
			'objectYoutube'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 30,
				'null'				=> true,
			],
			'objectFormat'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 30,
				'null'				=> true,
			],
			'objectSize'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 30,
				'null'				=> true,
			],
			'objectRequirement'		=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectInstructions'	=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectVersion'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 30,
				'null'				=> true,
			],
			'objectContributors'	=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectEntities'		=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectCreatedAt'		=> [
				'type'				=> 'DATETIME',
			],
			'objectTopic'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 150,
				'null'				=> true,
			],
			'objectInteractivity'	=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 50,
				'null'				=> true,
			],
			'objectCost'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 110,
				'null'				=> true,
			],
			'objectRights'			=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectUse'				=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectClasification'	=> [
				'type'				=> 'TEXT',
				'null'				=> true,
			],
			'objectTaxonomy'		=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'null'				=> true,
			],
			'objectViews'			=> [
				'type'				=> 'INT',
				'constraint'		=> 11,
				'unsigned'			=> true,
				'default'			=> 0,
			],
			'isObjectActive'		=> [
				'type'				=> 'TINYINT',
				'constraint'		=> 1,
				'unsigned'			=> true,
				'default'			=> 1,
			],
		]);
		$this->forge->addKey('_id', true);
		$this->forge->addForeignKey('objectTaxonomy', 'objecttaxonomies', '_id', 'CASCADE', 'SET NULL');
		$this->forge->createTable('objects');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('objects');
	}
}
