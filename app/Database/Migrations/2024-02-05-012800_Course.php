<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'bio' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'requirements' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'benefits' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
                'null'           => true,
            ],
            'price' => [
                'type'           => 'VARCHAR',
                'constraint'     => 10,
            ],
            'level' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'category' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'student' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'visible' => [
                'type'           => 'VARCHAR',
                'constraint'     => 1,
            ],
            'coursephoto' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
                'null'           => true,
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addKey("id");
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('level', 'courselevels', 'id');
        $this->forge->addForeignKey('category', 'coursecategories', 'id');
        $this->forge->createTable("courses");
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('courses');
        $this->db->enableForeignKeyChecks();
    }
}
