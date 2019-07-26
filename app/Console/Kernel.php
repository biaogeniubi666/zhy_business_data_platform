<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Console\Command;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;  // 加上db操作文件

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
            DB::insert('insert into air_quality_data (id, area, tmp, hum, aft, fav, co2, fd) values (?, ?, ?, ?, ?, ?, ?, ?)', [1, "chashuijian", 1.3, 0.6 ,5.3 ,4.4, 3.8, 1.1]);

        })->everyFiveMinutes();
    }   

    /**
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
