<?php

namespace App\Console\Commands;

use App\Http\Controllers\admin\ImportvideoController;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class Get_video_channel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get_video_channel';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get_video_channel';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    
    public function handle(){
        $import = new ImportvideoController();
        $import->get_video_channel();
        $import->send_mail_to_me_with_content("
            <h2>Hoàn thành xong Get_video_channel</h2> ".PHP_EOL."
        ",
        "Import Get_video_channel",
        "Laravel Get_video_channel"
        );
    }
}
