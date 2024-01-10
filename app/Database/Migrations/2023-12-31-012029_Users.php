<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up() : void
    {
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'           => 'VARCHAR',
                'constraint'     => 30,
                'unique'         => true,
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => 75,
                'unique'         => true,
            ],
            'password' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'null'           => true,
            ],
            'surname' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
                'null'           => true,
            ]
        ];
        $this->forge->addField($fields);
        $this->forge->addKey("id");
        $this->forge->createTable("users");
    }

    public function down(): void
    {
        $this->forge->dropTable('users');
    }
}
