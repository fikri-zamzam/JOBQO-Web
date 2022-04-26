<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin_auths')->insert([
        	'auth_type' => 'Super Admin',
        	'deskripsi' => 'Contoh seeder 1',
        ]);

        DB::table('admin_auths')->insert([
        	'auth_type' => 'Admin',
        	'deskripsi' => 'Contoh seeder 2',
        ]);

        // php artisan migrate:fresh --seed
    }
}
