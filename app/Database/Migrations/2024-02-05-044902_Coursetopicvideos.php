<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coursetopicvideos extends Migration
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
            'topic_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'video_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addForeignKey('course_id', 'courses', 'id');
        $this->forge->addForeignKey('topic_id', 'coursetopics', 'id');
        $this->forge->addForeignKey('video_id', 'coursevideos', 'id');
        $this->forge->addKey(['course_id', 'topic_id', 'video_id']);
        $this->forge->createTable("coursetopicvideos");
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('coursetopicvideos');
        $this->db->enableForeignKeyChecks();
    }
}
