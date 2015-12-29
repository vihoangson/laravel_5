<?php
namespace App\Http\Controllers\admin;
use Mail;
use Log;
use App\Models\Videos;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CheckArticlesRequest;
use App\Http\Controllers\Controller;
use google\apiclient\src\Google\Service\YouTube;
use Illuminate\Console\Command;
class ImportvideoController extends Controller
{
	private $info_log=[];

	public function __construct(){
		define("API_GOOGLE","AIzaSyClzC3syB5Ig4vpjgsvkHF2mEU9kTpi4C4");
		$this->video_per_result = 50;
	}

	public static function cron_tab(){
		Log::info("Do crontab at: ".date("Y-m-d h:i:s"));
		self::send_mail_to_me();
	}

	public static function send_mail_to_me(){
		$data = array(
			'name' => date("Y-m-d")
			);

		Mail::send('emails.welcome', $data, function ($message) {

			$message->from('info@vihoangson.com', 'Được gửi đi từ Laravel');

			$message->to('vihoangson@gmail.com')->subject('Learning Laravel test email');

		});
	}

	public function show(){

		///////
		// Tự động lấy tin theo từ khóa
		///////
		//$this->auto_get_video();

		///////
		// Tìm và xóa cái video bị trùng
		///////
		//$this->find_duplicate_row_and_delete();

		///////
		// Tự động tìm và xóa các file đã disable
		///////
		//$this->find_and_delete_video_disable();

		///////
		// Cập nhật vào viewCount
		///////
		// $this->update_summary_to_viewcount();
		return view("admin.importvideo");
	}

	public function ajax_action_import_video($case,$keywords=null){

		switch($case){
			case "auto_get_video":
				$this->info_log[] = "Thực hiện";
				$this->auto_get_video($keywords);
			break;
			case "find_duplicate_row_and_delete":
				$this->info_log[] = "Thực hiện";
				$this->find_duplicate_row_and_delete();
			break;
			case "find_and_delete_video_disable":
				return false;
				$this->find_and_delete_video_disable();
			break;
			case "update_summary_to_viewcount":
				return false;
				$this->update_summary_to_viewcount();
			break;
			case "update_summary_to_duration":
				return false;
				$this->update_summary_to_duration();
			break;
			
		}

		echo implode("<br>",$this->info_log);
	}

	///////
	// Cập nhật vào viewCount
	///////
	private function update_summary_to_viewcount(){
		$this->info_log[] = __FUNCTION__;
		$rs = Videos::all();
		foreach ($rs as $key => $value) {
			$summary = json_decode($value->videos_summary)[0];
			if(isset($summary->statistics->viewCount)){
				$value->update(["videos_viewcount"=>$summary->statistics->viewCount]);
				Log::info("update_summary_to_viewcount: ".$summary->statistics->viewCount);
			}else{
			}
		}
	}

	///////
	// Cập nhật vào viewCount
	///////
	private function update_summary_to_duration(){
		$this->info_log[] = __FUNCTION__;
		$rs = Videos::all();
		foreach ($rs as $key => $value) {
			$summary = json_decode($value->videos_summary)[0];
			if(isset($summary->contentDetails->duration)){
				$value->update(["videos_duration"=>$summary->contentDetails->duration]);
				Log::info("update_summary_to_duration: ".$summary->contentDetails->duration);
			}
		}
	}

	///////
	// Tự động tìm và xóa các file đã disable
	///////
	private function find_and_delete_video_disable(){
		return;
		$log = "Start: ".__FUNCTION__." ";
		$log .= "Các video bị chết: ";
		$rs = Videos::all();
		foreach($rs as $key => $value){
			$data = ($this->get_detail_video($value->videos_url,["part" => 'status']));
			if(empty($data)){
				$value->delete();
				$log .= "".$value->videos_url.", ";
				echo "<hr>";
			}else{
				echo "<p>Pass</p>";
			}
			if($key>20){
				break;
			}
		}
		$log .= "Stop: ".__FUNCTION__." ";
		Log::info($log);
	}

	///////
	// Tự động lấy tin theo từ khóa
	///////
	public function auto_get_video($keywords=null){
		$keywords_tmp=[
			// "Khoa học",
			// "Công nghệ",
			// "Khoa học và công nghệ",
			// "Tin thế giới",
			// "Thế giới tự nhiên",
			// "Thế giới động vật",


			// "trường giang",
			// "hài trường giang",
			// "Hoài Linh",
			// "Hài Hoài Linh",
			// "Nhã Phương",
			// "Ơn trời cậu đây rồi",
			// "Ơn giời cậu đây rồi",
			// "thách thức danh hài",
			// "Cười xuyên việt",
			// "Gặp nhau cuối tuần",
			// "Hỏi xoáy đáp xoay",


			// "phim hoạt hình",
			// "hoạt hình",
			// "hãy đợi đấy",
			// "dragon ball",
			// "Doraemon",
			// "Đô rê mon",
			// "mickey",

			//"guitar solo",
			//"nhạc xuân",
			// "nhạc đám cưới",
			// "nhạc cưới",
			//"dưa leo",

			//"DIY do it yourself",
			//"how does it made",
		];
		if(empty($keywords)){
			$this->info_log[] = "Không có keywords";
			return false;
		}
		$keywords_a = explode(",",$keywords);
		$this->info_log[] = "<h2>Import các mục sau:</h2>";
		$rs = $this->get_save_video_by_array($keywords_a);

	}


	///////
	// Tìm và xóa cái video bị trùng
	///////
	private function find_duplicate_row_and_delete(){
		$rs = \DB::table("videos")
			->select(\DB::raw('id, videos_url'))
			->groupBy('videos_url')
			->havingRaw("COUNT(*) >1")
			->get();
		foreach ($rs as $key => $value) {
			Videos::find($value->id)->delete();
			Log::info("Xóa duplicate video: ".$value->id);
		}
	}

	///////
	// Lấy thông tin chi tiết của video thông qua ID video
	///////
	private function get_detail_video($id,$params=[]){
		$part = 'snippet,contentDetails,statistics,status';
		if(!empty($params["part"])){
			$part = $params["part"];
		}
		$option = array(
			'part' => $part,
			'mine' => 'true',
			'id' => $id,
			'key' => API_GOOGLE
			);
		$url = "https://www.googleapis.com/youtube/v3/videos?".http_build_query($option, 'a', '&');
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$json_response = curl_exec($curl);
		curl_close($curl);
		$responseObj = json_decode($json_response);
		return $responseObj->items;
	}

	///////
	// Lấy thông tin video và save vào db
	///////
	private function get_save_video_by_array($keys){
			if(empty($keys)) return false;
			$num_request =$this->video_per_result;
			foreach ($keys as $key_keys => $value_keys) {
				$this->info_log[] = "Keyword: [".$value_keys."] - [".$num_request."] kết quả";
				$params = [
					"keywords"    =>$value_keys,
					"num_request" => $num_request,
				];
				$video = $this->get_video_custom($params);
				$video["keywords"] = $params["keywords"];
				$this->save_video_by_array($video);
			}
			return true;
	}

	///////
	// Xử lý save vào db
	// $params[$i]["videoId"]
	// $params[$i]["title"]
	// $params[$i]["description"]
	//
	// $params["keywords"]
	///////
	private function save_video_by_array($params){
		$i = 0;
		foreach ($params as $key => $value) {
			if(empty($value["videoId"])) continue;
			if(Videos::where("videos_url",$value["videoId"])->count()>0){
				$this->info_log[] = "<span class='label label-danger'> Đã có trong DB</span> [".$value["title"]."]";
				continue;
			} else{
				$this->info_log[] = "<span class='label label-success'> Không có trong DB</span> [".$value["title"]."]";
			}
			$videos_summary = $this->get_detail_video($value["videoId"]);
			$data_video = [
				"videos_url"       => $value["videoId"],
				"videos_title"     => $value["title"],
				"videos_cat"       => $params["keywords"],
				"videos_note"      => $value["description"],
				"videos_summary"   => json_encode($videos_summary),
				"videos_viewcount" => $videos_summary[0]->statistics->viewCount,
				"videos_duration"  => $videos_summary[0]->contentDetails->duration,
			];
			if(Videos::create($data_video)){
				$i++;
			}

			Log::info(" Insert new video: ". json_encode($data_video));
		}
		$this->info_log[] = "Đã save: [".$i."] kết quả";
	}


	///////
	// Lấy thông tin tùy chỉnh không giới hạn page
	//	$params["keywords"]
	//	$params["num_request"]
	///////
	private function get_video_custom($params){
		$keywords    = $params["keywords"];
		$num_request = $params["num_request"];
		$perpage = 50;
		$options = [];
		$j=0;
		$i=0;
		$video=[];
		while($j < $num_request){
			if(isset($rs[$i-1]["PageToken"]["nextPageToken"])){
				$options["PageToken"] = $rs[$i-1]["PageToken"]["nextPageToken"];
			}
			$rs[$i] = $this->search_youtube($keywords,$perpage,$options);
			foreach ($rs[$i][$keywords] as $key => $value) {
				$video[] = $value;
				$j++;
				if($j>$num_request){
					break;
				}
			}
			$i++;
		}
		$this->info_log[] = "Hoàn thành [".$j."] kết quả";
		return $video;
	}

	private function search_youtube($keywords,$number,$options=array()) {
		//require(plugin_dir_path(__FILE__ )."class/Google/autoload.php");
		/*
		* Set $DEVELOPER_KEY to the "API key" value from the "Access" tab of the
		* Google Developers Console <https://console.developers.google.com/>
		* Please ensure that you have enabled the YouTube Data API for your project.
		*/
		$DEVELOPER_KEY = API_GOOGLE;
		$client = new \Google_Client();
		$client->setDeveloperKey($DEVELOPER_KEY);
		// Define an object that will be used to make all API requests.
		$youtube = new \Google_Service_YouTube($client);
		
		$q = $keywords;
		$maxResults = $number;

		try {
			// Call the search.list method to retrieve results matching the specified
			// query term.
			$param = [
				'q' => $q,
				'maxResults' => $maxResults,
			];
			if(isset($options["PageToken"])){
				$param["pageToken"] = $options["PageToken"];
			}

			$searchResponse = $youtube->search->listSearch('id,snippet',$param);

			// Add each result to the appropriate list, and then display the lists of
			// matching videos, channels, and playlists.
			$return=array();
			foreach ($searchResponse['items'] as $searchResult) {
				switch ($searchResult['id']['kind']) {
					case 'youtube#video':
						$return["videos"][] = $searchResult;
						break;
					case 'youtube#channel':
						$return["channels"][] = $searchResult;
						break;
					case 'youtube#playlist':
						$return["playlists"][] = $searchResult;
						break;
				}
			}

		} catch (Google_Service_Exception $e) {
			$htmlBody .= sprintf('<p>A service error occurred: <code>%s</code></p>',
				htmlspecialchars($e->getMessage()));
		} catch (Google_Exception $e) {
			$htmlBody .= sprintf('<p>An client error occurred: <code>%s</code></p>',
				htmlspecialchars($e->getMessage()));
		}
		if(isset($htmlBody)){
			$return = $htmlBody;
		}
		foreach ($return["videos"] as $key1 => $value1) {
			$video[$q][$key1]["videoId"]     = $value1["id"]["videoId"];
			$video[$q][$key1]["title"]       = $value1["snippet"]["title"];
			$video[$q][$key1]["description"] = $value1["snippet"]["description"];
		}
		$PageToken = array(
			'prevPageToken' => $searchResponse['prevPageToken'],
			'nextPageToken' => $searchResponse['nextPageToken'],
		);
		$video["PageToken"] = $PageToken;
		return $video;
	}


}

