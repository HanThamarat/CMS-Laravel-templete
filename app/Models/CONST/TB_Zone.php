<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Zone extends Model
{
    use HasFactory;
    protected $table = 'TB_Zones';
    protected $fillable = ['id', 'Zone_Name', 'Zone_Code', 'Flag'];
}
