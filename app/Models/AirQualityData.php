<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AirQualityData extends Model
{
    
    // 定义数据列的属性！
    protected $fillable = [
        'id',
        'area', 'tmp','hum',
        'aft','fav','co2','fd'
    ];

}
