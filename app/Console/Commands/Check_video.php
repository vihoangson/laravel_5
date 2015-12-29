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
        // $import->find_and_delete_video_disable();
        // $import->send_mail_to_me_with_content("Hoàn thành xong find_and_delete_video_disable");        
        $keywords=[
            "Khoa học",
            "Công nghệ",
            "Khoa học và công nghệ",
            "Tin thế giới",
            "Thế giới tự nhiên",
            "Thế giới động vật",


            "trường giang",
            "hài trường giang",
            "Hoài Linh",
            "Hài Hoài Linh",
            "Nhã Phương",
            "Ơn trời cậu đây rồi",
            "Ơn giời cậu đây rồi",
            "thách thức danh hài",
            "Cười xuyên việt",
            "Gặp nhau cuối tuần",
            "Hỏi xoáy đáp xoay",


            "phim hoạt hình",
            "hoạt hình",
            "hãy đợi đấy",
            "dragon ball",
            "Doraemon",
            "Đô rê mon",
            "mickey",

            "guitar solo",
            "nhạc xuân",
            "nhạc đám cưới",
            "nhạc cưới",
            "dưa leo",

            "DIY do it yourself",
            "how does it made",
        ];
        $import->auto_get_video($keywords);
        $import->send_mail_to_me_with_content("Hoàn thành xong auto_get_video");        
    }
}
