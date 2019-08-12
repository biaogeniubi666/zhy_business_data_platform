<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AirSix extends Model
{
    // 定义数据列的属性！
    protected $fillable = [
        'CreateTime',
        'TEMP','HUMI','PM25','CO2','CH2O','VOC'
    ];
}
