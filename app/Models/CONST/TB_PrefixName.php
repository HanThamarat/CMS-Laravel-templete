<?php

namespace App\Models\CONST;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TB_PrefixName extends Model
{
    use HasFactory;
    protected $table = 'TB_PrefixNames';
    protected $fillable = ['id', 'Prefix_Code', 'Name_TH', 'NAME_EN', 'flag'];
}
