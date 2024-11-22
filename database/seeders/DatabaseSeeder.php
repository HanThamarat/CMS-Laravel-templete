<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            ZoneSeeder::class,
            PrefixnameSeeder::class,
            UserSeeder::class,
            DashboardTableSeeder::class,
            GenderSeeder::class,
            NationalitySeeder::class,
            ReligionSeeder::class,
            MaritalStatusSeeder::class,
        ]);
    }
}
