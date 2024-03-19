<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sector extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'autoincrement' => true,
            ],
            'content' => [
                'type'          => 'TEXT'
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('sector');
    }

    public function down()
    {
        $this->forge->dropTable('sector');
    }
}
