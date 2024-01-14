<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $fields = [
            'phonenumber' => [
                'type'           => 'VARCHAR',
                'constraint'     => 30,
                'unique'         => true,
            ],
            'skill' => [
                'type'           => 'VARCHAR',
                'constraint'     => 50,
            ],
            'bio' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
            ],
            'photourl' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
            ],
            'coverphotourl' => [
                'type'           => 'VARCHAR',
                'constraint'     => 150,
            ],
        ];
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'phonenumber');
        $this->forge->dropColumn('users', 'skill');
        $this->forge->dropColumn('users', 'bio');
        $this->forge->dropColumn('users', 'photourl');
        $this->forge->dropColumn('users', 'coverphotourl');
    }
}
