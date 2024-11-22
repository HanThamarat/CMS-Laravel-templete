<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Schema;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TB_Religions')->insert([
            [
                'Name_TH' => 'อิสลาม',
                'Name_EN' => 'Islam',
                'Flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name_TH' => 'คริสต์',
                'Name_EN' => 'Christianity',
                'Flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name_TH' => 'พุทธ',
                'Name_EN' => 'Buddhism',
                'Flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name_TH' => 'อื่นๆ',
                'Name_EN' => 'Other',
                'Flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
