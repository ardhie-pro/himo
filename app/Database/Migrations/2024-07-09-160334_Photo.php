<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Photo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'page5_id' => [
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
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('page5_id', true);
        $this->forge->createTable('page5');
    }

    public function down()
    {
        $this->forge->dropTable('page5');
    }
}
