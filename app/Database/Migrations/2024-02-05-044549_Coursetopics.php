<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coursetopics extends Migration
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
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
            'course_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            /*'video_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],*/
        ];
        $this->forge->addField($fields);
        //$this->forge->addForeignKey('video_id', 'coursevideos', 'id');
        $this->forge->addForeignKey('course_id', 'courses', 'id');
        $this->forge->addKey('id');
        $this->forge->createTable("coursetopics");
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('coursetopics');
        $this->db->enableForeignKeyChecks();
    }
}
