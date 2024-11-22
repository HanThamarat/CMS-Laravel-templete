<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_MaritalStatus extends Model
{
    use HasFactory;

    // กำหนดชื่อของตารางให้ตรงกับตารางที่สร้างใน Migration
    protected $table = 'TB_marital_statuses';

    // กำหนดคอลัมน์ที่สามารถกรอกข้อมูลได้
    protected $fillable = [
        'name_status_marital_th', // ชื่อคอลัมน์ภาษาไทย
        'name_status_marital_en', // ชื่อคอลัมน์ภาษาอังกฤษ
    ];
}

