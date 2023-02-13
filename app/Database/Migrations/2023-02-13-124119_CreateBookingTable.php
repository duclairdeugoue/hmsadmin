<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBookingTable extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'customer_id'   => [
                'type'  => 'INT',
                'null'  => 'true'
            ],
            'roomcategory_id' => [
                'type' => 'int',
                'null' => true,
            ],
            'total_members' => [
                'type' => 'int',
                'null' => true,
            ],
            'date' => [
                'type' => 'DATE',
            ],
            'time' => [
                'type' => 'TIME',
            ],
            'arival_date' => [
                'type' => 'DATE',
            ],
            'departure_date' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type' => "ENUM('active','inactive')",
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
        ];

        $this->forge->addField($fields);

        $this->forge->addKey('id', true);
        $this->forge->createTable('bookings');
    }



    public function down()
    {
        $this->forge->dropTable('bookings');
    }
}
