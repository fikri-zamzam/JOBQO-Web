<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CompaniesSeeder;
use Database\Seeders\UsersSeeder;
use Database\Seeders\FAQSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CompaniesSeeder::class,
            JobsSeeder::class,
            UsersSeeder::class,
            FAQSeeder::class
        ]);
    }
}
