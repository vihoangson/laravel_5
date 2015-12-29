<?php

namespace App\Console\Commands;

use App\Http\Controllers\admin\ImportvideoController;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class Sendmail_cron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendmail_cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ImportvideoController::cron_tab();
    }
}
