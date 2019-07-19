<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Unit extends Model
{
    //
    // use Notifiable;

    // protected $table ='units';
    // 也可以换其他的数据表，以上代码其实不输入也可以，通过PHP artisan命令时已经默认定义为units数据表了。

    // 定义数据列的属性！
    protected $fillable = [
        'unit_name' ,
    ];

}
