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
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');

        $data = [
            'nim'  => '32602300068',
            'nama' => 'Fauzan Habib Assidiq',
            'prodi'=> 'Teknik Informatika'
        ];

        $builder->insert($data);
        return "Data mahasiswa berhasil ditambahkan!";
    }

    public function tampilMahasiswa()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $query = $builder->get();

        $data['mahasiswa'] = $query->getResult();
        return view('data_mahasiswa', $data);
    }
}
