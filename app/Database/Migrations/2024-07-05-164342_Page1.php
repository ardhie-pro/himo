<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Page1 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'page1_id' => [
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
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'Function' => null,
            ],
            'gambar' => [
                'type' => 'TEXT',
                'function' => 'MD5',
                'null' => true,
            ],


            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'update_at DATETIME DEFAULT CURRENT_TIMESTAMP',

        ]);
        $this->forge->addKey('page1_id', true);
        $this->forge->createTable('page1');
    }

    public function down()
    {
        $this->forge->dropTable('page1');
    }
}
