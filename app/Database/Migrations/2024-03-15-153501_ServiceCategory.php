<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ServiceCategory extends Migration
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
            'title' => [
                'type'          => 'VARCHAR',
                'constraint'    => 100,
            ],
            'description' => [
                'type'          => 'TEXT',
                'null'          => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('servicecategory');
    }

    public function down()
    {
        $this->forge->dropTable('servicecategory');
    }
}
