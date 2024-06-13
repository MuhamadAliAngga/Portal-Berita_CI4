<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Visitor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_visitor' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],
            'id_artikel' => [
                'type' => 'INT',
                'unsigned' => true,
            ],
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'view_count' => [
                'type' => 'INT',
                'default' => 1,
            ],
            'last_viewed' => [
                'type' => 'TIMESTAMP',
                'default' => 'CURRENT_TIMESTAMP',
                'null' => false,
                'on_update' => 'CURRENT_TIMESTAMP',
            ],
        ]);

        $this->forge->addKey('id_visitor', true); // Primary Key
        $this->forge->createTable('visitor');
    }

    public function down()
    {
        $this->forge->dropTable('visitor');
    }
}
