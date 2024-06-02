<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel artikel
		$this->forge->addField([
			'id_artikel'         => [
				'type'           => 'INT',
				'auto_increment' => true
			],
			'id_penulis'         => [
				'type'           => 'INT'
			],
			'judul'      		 => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'thumbnail'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'ringkasan' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'isi' => [
				'type'           => 'TEXT'
			],
			'tanggal_dibuat' => [
				'type'           => 'DATE'
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id_artikel', TRUE);

		// Membuat tabel artikel
		$this->forge->createTable('artikel', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('artikel');
    }
}
