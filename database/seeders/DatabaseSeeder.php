<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CountrySeeder::class]);
        $this->call([StatesSeeder::class]);
        $this->call([CitiesSeeder::class]);
    }
}
