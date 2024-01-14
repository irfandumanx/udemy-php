<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseLevelSeeder extends Seeder
{

    private string $table = "courselevels";

    public function run() : void
    {
        $this->db->table($this->table)->insert(['level' => 'Tüm Seviyeler']);
        $this->db->table($this->table)->insert(['level' => 'Başlangıç Seviye']);
        $this->db->table($this->table)->insert(['level' => 'Orta Seviye']);
        $this->db->table($this->table)->insert(['level' => 'İleri Seviye']);
        $this->db->table($this->table)->insert(['level' => 'En İleri Seviye']);
    }
}
