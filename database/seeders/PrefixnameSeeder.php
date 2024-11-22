<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CONST\TB_PrefixName;

class PrefixnameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TB_PrefixName::create([
            'Prefix_Code' => 'Pre-001',
            'Name_TH' => "นาย",
            'NAME_EN' => "mr",
            'flag' => "active",
        ]);

        TB_PrefixName::create([
            'Prefix_Code' => 'Pre-003',
            'Name_TH' => "นางสาว",
            'NAME_EN' => "ms",
            'flag' => "active",
        ]);

        TB_PrefixName::create([
            'Prefix_Code' => 'Pre-003',
            'Name_TH' => "นาง",
            'NAME_EN' => "mrs",
            'flag' => "active",
        ]);
    }
}
