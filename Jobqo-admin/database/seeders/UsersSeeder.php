<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Fikri Azkiai Zamzam',
        	'username' => 'zamzam21',
            'gender' => 'L',
            'tgl_lahir' => '2001-03-21',
            'email' => 'zamzam@gmail.com',
            'password' => '$2y$10$wJbfsQAQPIrulnx5/W/D7uY/le9G2bDACpcjg8CdXeajbGsXTZyoG',
            //password
            'alamat' => 'Ajung',
            'roles' => 'Admin',
            'created_at'=> now()
        ]);
    }
}
