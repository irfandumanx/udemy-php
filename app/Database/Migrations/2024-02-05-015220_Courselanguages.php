<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Courselanguages extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $fields = [
            'course_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'language_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
        ];
        $this->forge->addForeignKey('course_id', 'courses', 'id');
        $this->forge->addForeignKey('language_id', 'languages', 'id');
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey(['course_id', 'language_id']);
        $this->forge->createTable("courselanguages");
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('courselanguages');
        $this->db->enableForeignKeyChecks();
    }
}
