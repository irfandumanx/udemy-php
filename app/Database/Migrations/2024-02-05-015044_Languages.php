<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Languages extends Migration
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
            'language' => [
                'type'           => 'VARCHAR',
                'constraint'     => 30,
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable("languages");
    }

    public function down()
    {
        $this->forge->dropTable('languages');
    }
}



