<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penulis extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel penulis
		$this->forge->addField([
			'id_penulis'         => [
				'type'           => 'INT',
				'auto_increment' => true
			],
			'nama_penulis'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'biografi'      => [
				'type'           => 'TEXT',
			],
			'foto' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'link_portofolio' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_penulis', TRUE);

		// Membuat tabel penulis
		$this->forge->createTable('penulis', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('penulis');
    }
}
