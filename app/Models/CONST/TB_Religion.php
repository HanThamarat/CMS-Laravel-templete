<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Religion extends Model
{
    use HasFactory;

    protected $table = 'TB_Religions'; // ตรวจสอบให้ตรงกับชื่อตารางในฐานข้อมูล
}
