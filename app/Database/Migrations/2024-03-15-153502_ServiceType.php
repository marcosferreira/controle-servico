<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ServiceType extends Migration
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
            'category_id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('category_id', 'servicecategory', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('servicetype');
    }

    public function down()
    {
        $this->forge->dropTable('servicetype');
    }
}
