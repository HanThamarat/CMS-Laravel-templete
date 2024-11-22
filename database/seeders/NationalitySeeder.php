<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class NationalitySeeder extends Seeder
{
    public function run()
    {
        // ข้อมูล Nationalities
        $nationalities = [
            [
                'Name_TH' => 'ไทย',
                'Name_EN' => 'Thai',
                'Flag' => 'active',  // สถานะการใช้งาน เช่น active
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Name_TH' => 'อื่นๆ',
                'Name_EN' => 'Other',
                'Flag' => 'active',  // สถานะการใช้งาน เช่น active
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // สามารถเพิ่มข้อมูลประเทศเพิ่มเติมที่นี่
        ];

        // ใช้ DB::table สำหรับใส่ข้อมูลลงในฐานข้อมูล
        DB::table('TB_Nationalities')->insert($nationalities);
    }
}

