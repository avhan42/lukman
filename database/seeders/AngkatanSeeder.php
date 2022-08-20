<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AngkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $angkatan = [
            [
                'angkatan' => '2016'
            ],
            [
                'angkatan' => '2017'
            ],
            [
                'angkatan' => '2018'
            ]
        ];
        \App\Models\Angkatan::insert($angkatan);
    }
}
