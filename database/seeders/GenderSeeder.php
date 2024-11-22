<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    public function run()
    {
        // แทรกข้อมูลใหม่ลงในตาราง TB_Genders โดยไม่ระบุ 'id'
        DB::table('TB_Genders')->insert([
            [
                'Name_TH' => 'ชาย',
                'NAME_EN' => 'Male',
                'flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name_TH' => 'หญิง',
                'NAME_EN' => 'Female',
                'flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name_TH' => 'เพศอื่นๆ',
                'NAME_EN' => 'Other',
                'flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Name_TH' => 'ไม่ระบุ',
                'NAME_EN' => 'Unspecified',
                'flag' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}



