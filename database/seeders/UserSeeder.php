<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'level' => '1',
            ],
            [
                'username' => 'mahasiswa',
                'password' => bcrypt('mahasiswa'),
                'level' => '2',
            ],
            [
                'username' => '1815051035',
                'password' => bcrypt('1815051035'),
                'level' => '2',
            ],
        ];
        foreach ($user as $key => $value) {
            \App\Models\User::insert($value);
        }
    }
}
