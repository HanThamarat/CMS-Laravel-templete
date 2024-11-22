<?php

namespace Database\Seeders;

use App\Models\CONST\TB_MaritalStatus;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    public function run()
    {
        // เพิ่มข้อมูลในตาราง marital_statuses
        TB_MaritalStatus::create([
            'name_status_marital_th' => 'โสด',
            'name_status_marital_en' => 'Single',
        ]);

        TB_MaritalStatus::create([
            'name_status_marital_th' => 'สมรสจดทะเบียน',
            'name_status_marital_en' => 'Married (Registered)',
        ]);

        TB_MaritalStatus::create([
            'name_status_marital_th' => 'สมรสไม่จดทะเบียน',
            'name_status_marital_en' => 'Married (Unregistered)',
        ]);

        TB_MaritalStatus::create([
            'name_status_marital_th' => 'หย่าร้าง',
            'name_status_marital_en' => 'Divorced',
        ]);

        TB_MaritalStatus::create([
            'name_status_marital_th' => 'หม้าย',
            'name_status_marital_en' => 'Widowed',
        ]);
    }
}

