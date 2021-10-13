<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ucapan extends Migration
{   
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			
			'message' => [
				'type' => 'TEXT',
				'null' => true,
			],
			
			'created_date datetime default current_timestamp',
			'updated_date datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('ucapan');
	}

	public function down()
	{

		$this->forge->dropTable('ucapan');
	}
}


