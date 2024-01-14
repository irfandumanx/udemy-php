<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coursecategories extends Migration
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
            'category' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey('id');
        $this->forge->createTable("coursecategories");
    }

    public function down()
    {
        $this->forge->dropTable('coursecategories');
    }
}
