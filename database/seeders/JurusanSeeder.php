<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = [
            [
                'kode_jurusan' => 'TI',
                'nama_jurusan' => 'Teknik Informatika'
            ],
            [
                'kode_jurusan' => 'SI',
                'nama_jurusan' => 'Sistem Informasi'
            ],
            [
                'kode_jurusan' => 'MI',
                'nama_jurusan' => 'Manajemen Informatika'
            ]
            ];

        \App\Models\Jurusan::insert($jurusan);
    }
}
