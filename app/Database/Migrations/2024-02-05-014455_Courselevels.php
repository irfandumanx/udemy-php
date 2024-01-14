<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courselevels extends Migration
{
    public function up()
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment'  => true
            ],
            'level' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id');
        $this->forge->createTable("courselevels");
    }

    public function down()
    {
        $this->forge->dropTable('courselevels');
    }
}
