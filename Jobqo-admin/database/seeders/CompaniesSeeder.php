<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_types')->insert([
        	'nameType' => 'PT - Perseroan Terbatas',
        	'deskripsi' => 'Melakukan modifikasi di seluruh data termasuk data admin',
            'created_at'=> now()
        ]);

        DB::table('company_types')->insert([
        	'nameType' => 'CV - Commanditaire Venootschap',
        	'deskripsi' => 'melakukan proses data pada saat tahap production',
            'created_at'=> now()
        ]);

        // company sector seeder

        DB::table('company_sectors')->insert([
        	'nameSector' => 'Otomotif',
        	'deskripsi' => 'Perusahaan yang bergerak di otomotif',
            'created_at'=> now()
        ]);

        DB::table('company_sectors')->insert([
        	'nameSector' => 'Kesehatan',
        	'deskripsi' => 'Perusahaan yang bergerak di kesehatan',
            'created_at'=> now()
        ]);
    }
}
