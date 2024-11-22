<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CONST\TB_Zone;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TB_Zone::create([
            "Zone_Name" => "PATANI ZONE",
            "Zone_Code" => "10",
            "Flag" => "active",
            "Zone_Name_TH" => "ปัตตานี"
        ]);
        TB_Zone::create([
            "Zone_Name" => "SONGKHLA ZONE",
            "Zone_Code" => "20",
            "Flag" => "active",
            "Zone_Name_TH" => "สงขลา"
        ]);
        TB_Zone::create([
            "Zone_Name" => "NAKHON SI THAMMARAT ZONE",
            "Zone_Code" => "30",
            "Flag" => "active",
            "Zone_Name_TH" => "นครศรีธรรมราช"
        ]);
        TB_Zone::create([
            "Zone_Name" => "KRABI ZONE",
            "Zone_Code" => "40",
            "Flag" => "active",
            "Zone_Name_TH" => "กระบี่"
        ]);
        TB_Zone::create([
            "Zone_Name" => "SURAT ZONE",
            "Zone_Code" => "50",
            "Flag" => "active",
            "Zone_Name_TH" => "สุราษฎร์ธานี"
        ]);
    }
}

