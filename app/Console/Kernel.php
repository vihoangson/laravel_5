<?php

namespace App\Console;
use App\Http\Controllers\admin\ImportvideoController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
        \App\Console\Commands\Sendmail_cron::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('sendmail_cron')
                 ->dailyAt('23:50')
                 ;
        // $schedule->call(function(){
        //     ImportvideoController::cron_tab();
        // });
    }
}
