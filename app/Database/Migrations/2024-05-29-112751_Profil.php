<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profil extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel profil
		$this->forge->addField([
			'id_profil'         => [
				'type'           => 'INT',
				'auto_increment' => true
			],
			'nama_lengkap'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'biografi'      => [
				'type'           => 'TEXT',
			],
			'foto_profil'     			 => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'deafult'     	 => 'deafult.jpg'
			],
			'link_portofolio' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_profil', TRUE);

		// Membuat tabel profil
		$this->forge->createTable('profil', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('penulis');
    }
}
