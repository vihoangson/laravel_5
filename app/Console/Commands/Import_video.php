<?php

namespace App\Console\Commands;

use App\Http\Controllers\admin\ImportvideoController;
use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class Import_video extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import_video';

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
        $tag = [
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
            "Vũ trụ",
            "trailer",
            "Nguyễn Hoàng Khắc Hiếu",
            "review sản phẩm",
            "engvid",
        ];
        if(true){
            //
            // $loop_in_days: Số ngày quay lại từ đầu của vòng lập
            //
            $loop_in_days =5 ;
            $page = date("z") % $loop_in_days;
            $page = 5;
            $per_page = (round(count($tag) / $loop_in_days));
            $start = $page*$per_page;
            $data_impor=[];
            for($i=$start ;$i<($start + $per_page) ;$i++) {
                if(!empty($tag[$i])){
                    $data_import[] = $tag[$i];
                }
            }
        }else{
            $data_import=[];
            //$data_import[0] = "review sản phẩm";
        }
        $keywords = implode(",", $data_import);
        $import->video_per_result = 100;
        $import->auto_get_video($keywords);
        $import->send_mail_to_me_with_content("Hoàn thành xong auto_get_video Tổng cộng: ".$import->count_import." video");
    }
}
