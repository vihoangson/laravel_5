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
        \App\Console\Commands\Check_video::class,
        \App\Console\Commands\Import_video::class,
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
                 ->cron("0 */12 * * * *")
                 ;
        $schedule->command('check_video')
                 ->dailyAt('23:00')
                 ;
        $schedule->command('import_video')
                 ->dailyAt('02:00')
                 ;
        // $schedule->call(function(){
        //     ImportvideoController::cron_tab();
        // });
    }
}
