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
    
    public function handle(){
        $m = config("video.vus.vn.config.video_tag");
        print_r($m);
        return ;
        if(date("d")%5!=0){
            return ;
        }

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
        $import->video_per_result = 100;

        $s = microtime();
        $data_import = $tag;
        $keywords = implode(",", $data_import);
        $import->auto_get_video($keywords);
        $e = microtime();
        $time_process = $e-$s;
        $import->send_mail_to_me_with_content("
            <h2>Hoàn thành xong auto_get_video</h2> ".PHP_EOL."
            <p>Keywords: ".$keywords."</p>".PHP_EOL."
            <p>Tổng cộng: ".$import->var_log_count_import." video</p>
            <p>Time_process: [".$time_process."]</p>
        ");
    }
}
