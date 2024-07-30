<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Events extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'event_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'text1' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'text2' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'text3' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'gambar' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'gambar_judul' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('event_id', true);
        $this->forge->createTable('events');
    }

    public function down()
    {
        $this->forge->dropTable('events');
    }
}
