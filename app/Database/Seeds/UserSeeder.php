<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{

    private string $table = "users";

    public function run() : void
    {
        $data = [
            'username' => 'irfandumanx',
            'email' => 'irfanduman5@gmail.com',
            'password' => password_hash("12345", PASSWORD_DEFAULT),
        ];
        $this->db->table($this->table)->insert($data);
    }
}
