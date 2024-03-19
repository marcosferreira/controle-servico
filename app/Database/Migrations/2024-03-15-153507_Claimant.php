<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Claimant extends Migration
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
            'name' => [
                'type'          => 'TEXT'
            ],
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('claimant');
    }

    public function down()
    {
        $this->forge->dropTable('claimant');
    }
}
