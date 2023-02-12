<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddRoom extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'number' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'category_id' => [
                'type' => 'int',
                'null' => true,
            ],
            'ac' => [
                'type'  => "ENUM('AC','NO AC')",
                'null'  => false
            ],
            'food_id' => [
                'type' => 'int',
                'null' => true,
            ],
            'bedcount' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'cancelation_charges_id' => [
                'type'       => 'INT',
                'constraint' => '20',
            ],
            'price' => [
                'type'       => 'INT',
                'constraint' => '100',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => '200',
            ],
            'message' => [
                'type'       => 'TEXT',
                'constraint' => '200',
            ],
            'created_at' => [
                'type'      => 'DATETIME'
            ],
            'updated_at' => [
                'type'      => 'DATETIME'
            ],
            'deleted_at' => [
                'type'      => 'DATETIME'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('rooms');
    }

    public function down()
    {
        $this->forge->dropTable('rooms');
    }
}
