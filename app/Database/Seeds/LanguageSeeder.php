<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LanguageSeeder extends Seeder
{

    private string $table = "languages";

    public function run() : void
    {
        $this->db->table($this->table)->insert(['language' => 'Türkçe']);
        $this->db->table($this->table)->insert(['language' => 'İngilizce']);
    }
}
