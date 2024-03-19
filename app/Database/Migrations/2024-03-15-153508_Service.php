<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Service extends Migration
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
            'order_num' => [
                'type'          => 'INT',
            ],
            'date' => [
                'type'          => 'DATE',
            ],
            'service_type_id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'description' => [
                'type'          => 'TEXT',
            ],
            'sector_id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'user_id'   => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'claimant'   => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ]
        ]);
        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('service_type_id', 'servicetype', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('sector_id', 'sector', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('service');
    }

    public function down()
    {
        $this->forge->dropTable('service');
    }
}
