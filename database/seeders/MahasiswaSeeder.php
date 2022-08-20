<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
                'nama' => 'Rizki',
                'email' => 'Rizki@gmail.com',
                'nim' => '1815051035',
                'jk' => 'L',
                'id_jurusan' => '1',
                'id_angkatan' => '1',
            ],
            [
                'nama' => 'Ana',
                'email' => 'ana@gmail.com',
                'nim' => '1815051036',
                'jk' => 'P',
                'id_jurusan' => '2',
                'id_angkatan' => '2',

            ]
            ];
        \App\Models\Mahasiswa::insert($mahasiswa);
    }
}
