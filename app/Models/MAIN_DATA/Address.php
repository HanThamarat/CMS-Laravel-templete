<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    // ชื่อตาราง
    protected $table = 'Address';

    // กำหนดฟิลด์ที่สามารถเพิ่มข้อมูลได้
    protected $fillable = [
        'data_cus_id',
        'registration_number',
        'date_adds',
        'code_adds',
        'ordinal_adds',
        'status_adds',
        'type_adds',
        'house_number_adds',
        'house_group_adds',
        'building_adds',
        'village_adds',
        'room_number_adds',
        'floor_adds',
        'alley_adds',
        'road_adds',
        'house_zone_adds',
        'house_province_adds',
        'house_district_adds',
        'house_tambon_adds',
        'postal_adds',
        'detail_adds',
        'coordinates_adds',
        'user_zone',
        'user_branch',
        'user_insert',
        'user_update',
    ];

    // กำหนดประเภทข้อมูลสำหรับฟิลด์
    protected $casts = [
        'date_adds' => 'datetime',
    ];

    // ตัวอย่างความสัมพันธ์ (หากมี)
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'data_cus_id');
    }
}
