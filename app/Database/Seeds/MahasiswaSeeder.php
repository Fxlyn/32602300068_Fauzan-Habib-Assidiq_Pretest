<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim' => '32602300044',
                'nama' => 'Muhammad Rafli Aldian Jamil',
                'program_studi' => 'Teknik Informatika',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ];

        $this->db->table('mahasiswa')->insertBatch($data);
    }
} 