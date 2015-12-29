<?php

namespace App\Console\Commands;

use App\Http\Controllers\admin\ImportvideoController;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class Check_video extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check_video';

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
        $import = new ImportvideoController();
        $import->find_and_delete_video_disable();
    }
}
