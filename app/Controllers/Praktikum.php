<?php
namespace App\Controllers;

class Praktikum extends BaseController
{
    public function pretest()
    {
        return "Pretest Web Programming";
    }

    public function profil()
    {
        return view('profil_mahasiswa');
    }

    public function tambahMahasiswa()
    {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('tb_mahasiswa');

            $data = [
                'nim'  => '32602300044',
                'nama' => 'Muhammad Rafli Aldian Jamil',
                'prodi'=> 'Teknik Informatika'
            ];

            $builder->insert($data);
            return "Data mahasiswa berhasil ditambahkan!";
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function tampilMahasiswa()
    {
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('tb_mahasiswa');
            $query = $builder->get();

            $data['mahasiswa'] = $query->getResult();
            return view('data_mahasiswa', $data);
        } catch (\Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
