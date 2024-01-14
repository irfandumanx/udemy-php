<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Socialmedias extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $fields = [
            'users_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'facebook' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
            'twitter' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
            'linkedin' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
            'website' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
            'github' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
            ],
        ];
        $this->forge->addForeignKey('users_id', 'users', 'id');
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey('users_id');
        $this->forge->createTable("socialmedias");

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->dropTable('socialmedias');
        $this->db->enableForeignKeyChecks();
    }
}
