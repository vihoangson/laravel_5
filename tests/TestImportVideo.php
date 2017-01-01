<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestImportVideo extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $name_videos_cat = "test_videos_cat_name";
        $this->assertNotNull(((new App\Http\Controllers\admin\ImportvideoController)->get_videos_cat_id($name_videos_cat)));
    }


    /**
     * Test lấy video tự động từ youtube
     */
    public function test_auto_get_video_in_youtube(){
        $this->markTestSkipped("Không được làm");
        (new App\Http\Controllers\admin\ImportvideoController)->ajax_action_import_video("auto_get_video","hài trấn thành");
    }

    /**
     * Test Tìm video trùng và xóa chúng
     */
    public function test_find_duplicate_row_and_delete(){
        (new App\Http\Controllers\admin\ImportvideoController)->ajax_action_import_video("find_duplicate_row_and_delete");
    }

    /**
     * Test Tìm video bị xóa trên youtube và xóa nó ở db
     */
    public function test_find_and_delete_video_disable(){
        (new App\Http\Controllers\admin\ImportvideoController)->ajax_action_import_video("find_and_delete_video_disable");
    }

    /**
     * Test Cập nhật số lượng xem
     */
    public function test_update_summary_to_viewcount(){
        (new App\Http\Controllers\admin\ImportvideoController)->ajax_action_import_video("update_summary_to_viewcount");
    }

    /**
     * Test Cập nhật thời lượng của video
     */
    public function test_update_summary_to_duration(){
        (new App\Http\Controllers\admin\ImportvideoController)->ajax_action_import_video("update_summary_to_duration");
    }




}
