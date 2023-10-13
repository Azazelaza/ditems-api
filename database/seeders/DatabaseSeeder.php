<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            CitySeeder::class,
            CompaniesSeeder::class,
            CountrySeeder::class,
            RoleSeeder::class,
            StateSeeder::class,
        ]);
    }
}
