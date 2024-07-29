<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Page2 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'page2_id' => [
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
                'type'       => 'TEXT',
                'null' => true,
            ],
            'text3' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'text4' => [
                'type'       => 'TEXT',
                'null' => true,
            ],



            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('page2_id', true);
        $this->forge->createTable('page2');
    }

    public function down()
    {
        $this->forge->dropTable('page2');
    }
}
