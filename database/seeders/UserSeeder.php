<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'admin'
            ],
            [
                'name' => 'Pustakawan',
                'email' => 'pustakawan@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'pustakawan'
            ],
            [
                'name' => 'Anggota',
                'email' => 'anggota@gmail.com',
                'password' => bcrypt('1234'),
                'role' => 'anggota'
            ]
        ]);
    }
}
