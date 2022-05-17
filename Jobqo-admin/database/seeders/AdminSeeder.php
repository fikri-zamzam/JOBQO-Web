<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        	'deskripsi' => 'Melakukan modifikasi di seluruh data termasuk data admin',
            'created_at'=> now()
        ]);

        DB::table('admin_auths')->insert([
        	'auth_type' => 'Admin',
        	'deskripsi' => 'melakukan proses data pada saat tahap production',
            'created_at'=> now()
        ]);

        // php artisan migrate:fresh --seed
    }
}
