<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel user
		$this->forge->addField([
			'id_user'          => [
				'type'           => 'INT',
				'auto_increment' => true
			],
			'id_profil'          => [
				'type'           => 'INT'
			],
			'username'    		 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'password'     	 	 => [
				'type'           => 'VARCHAR',
				'constraint'     => 50
			],
			'akses' => [
				'type'           => 'INT',
				'constraint'     => 1
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_user', TRUE);

		// Membuat tabel user
		$this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
