<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_Gender extends Model
{
    use HasFactory;
    protected $table = 'TB_Genders';
    protected $fillable = ['id', 'Name_TH', 'NAME_EN', 'Flag'];
}
