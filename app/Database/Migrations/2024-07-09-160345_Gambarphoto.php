<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gambarphoto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'gambar_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'gambar' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('gambar_id', true);
        $this->forge->createTable('gambar');
    }

    public function down()
    {
        $this->forge->dropTable('gambar');
    }
}
