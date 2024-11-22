<?php

namespace App\Models\MAIN_DATA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CONST\TB_Nationality;

class Customers extends Model
{
    use HasFactory;
    protected $table = 'Customers';
    protected $fillable = [
        'id', 'PrefixName', 'FirstName_TH', 'MiddleName_TH', 'Lastname_TH', 'FirstName_EN', 'MiddleName_EN', 'Lastname_EN', 'Nickname_TH', 'Nickname_EN',
        'IDCard', 'IDCard_issus', 'IDCard_expire', 'Birthday', 'Gender', 'PhoneNumber_Primary', 'PhoneNumber_Secondary', 'Nationality', 'Religion', 'Driver_Licence',
        'Social_Line', 'Social_Facebook', 'Marital_Status', 'note', 'UserInsert', 'UserBranch', 'UserZone', 'Status'
    ];

    public function ToNationality() {
        return $this->hasOne(TB_Nationality::class, 'id', 'Nationality');
    }

}
