<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Command;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\AirQualityData;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        $schedule->call(function()
        {   
            // use Illuminate\Support\Facades\DB;  // 加上db操作文件
            //  DB::insert('insert into air_quality_data (area, tmp, hum, aft, fav, co2, fd) values (?, ?, ?, ?, ?, ?, ?)', ["chashuijian", 1.3, 0.6 ,5.3 ,4.4, 3.8, 1.1]);

           AirQualityData::create([
               'id', 'area'=> 'Diyishiyebu', 
               'tmp'=>randomFloat(19, 24), 
               'hum'=> randomFloat(40, 70),
               'aft'=> randomFloat(6, 9),
            //    'aft'=>ppython("testbiaoge1::go",6, 9),  //ppython函数为测试函数，利用python函数运算将最终结果转换为php数值。
               'fav'=> randomFloat(30, 50), 
               'co2'=>randomFloat(6, 9),
               'fd'=> randomFloat(1, 3) 
               ]);
        });
        
        function randomFloat($min = 0, $max = 1) {
            //用于测试，定义一个函数用于生成指定最大最小范围内随机浮点数
            return $min + mt_rand() / mt_getrandmax() * ($max - $min);
        }

    }   

    /**ggggggg
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
