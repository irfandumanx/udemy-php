<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coursevideos extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment'  => true
            ],
            'course_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'videourl' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
            'lesson_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addForeignKey('course_id', 'courses', 'id');
        $this->forge->addKey('id');
        $this->forge->createTable("coursevideos");
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('coursevideos');
        $this->db->enableForeignKeyChecks();
    }
}
