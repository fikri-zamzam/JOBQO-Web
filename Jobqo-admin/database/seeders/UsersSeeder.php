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

        // satu set hrd

        DB::table('users')->insert([
        	'name' => 'Muhammad Kholil',
            'user_details_id' => '1',
            'companies_id' => '1',
        	'username' => 'm_kholil',
            'gender' => 'L',
            'tgl_lahir' => '2002-06-21',
            'email' => 'kholil@gmail.com',
            'password' => '$2y$10$bNdqaiGdQ3gK55yDoGoa1O76w75Mu7OWa8K6CK8BjKLxqUGnngPN6',
            //password
            'alamat' => 'Jelbuk',
            'roles' => 'HRD',
            'created_at'=> now()
        ]);

    }
}
