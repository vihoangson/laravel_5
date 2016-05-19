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
	public $var_log_count_import = 0;

	/*
	* Number of result every import
	*/
	public $video_per_result = 50;

	public function __construct(){
		define("API_GOOGLE","AIzaSyClzC3syB5Ig4vpjgsvkHF2mEU9kTpi4C4");
	}

	public static function cron_tab(){
		Log::info("Do crontab at: ".date("Y-m-d h:i:s"));
		self::send_mail_to_me();
	}

	public static function send_mail_to_me(){
		copy(storage_path('phapthi.sqlite'),storage_path('phapthi_'.date("Y-m-d__H:i:s").'.sqlite'));
		$count = Videos::count();
		$data = array(
			'body' => "Tổng số record: ".$count
			);
		Mail::send('emails.welcome', $data, function ($message) {
			$message->from('info@vihoangson.com', 'Vi Hoàng Sơn');
			$message->to('vihoangson@gmail.com')->subject('Learning Laravel test email '.date("Y-m-d H:i:s"));
		});
	}
	public static function send_mail_to_me_with_content($content,$subject=null,$name=null){				
		$data = array(
			'body' => "<p>Nội dung send_mail_to_me_with_content : ".$content."</p>"
			);

		Mail::send('emails.welcome', $data, function ($message) {
			$message->from('info@vihoangson.com', (isset($name)?$name:'Vi Hoàng Sơn'));
			$message->to('vihoangson@gmail.com')->subject((isset($subject)?$subject:'Nội dung send_mail_to_me_with_content '.date("Y-m-d H:i:s")));
		});
		Log::info("[Send_mail_to_me_with_content] :".$data["body"]);
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
	public function find_and_delete_video_disable(){
		$log = "Start: ".__FUNCTION__." ";
		$log .= "Các video bị chết: ";
		$rs = Videos::all();
		$all_row = count($value);
		foreach($rs as $key => $value){
			if(vaild_youtube("http://img.youtube.com/vi/".$value->videos_url."/0.jpg")!="video valid"){
				echo "

				[".$key."/".$all_row."]".$value->videos_url.PHP_EOL."

				";
				$value->delete();
				Log::info("Delete: ".$value->videos_url."");
			}else{
				echo "Done: ".$value->videos_url."
			";
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
	public function find_duplicate_row_and_delete(){
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
				//============ ============  ============  ============ 
				// Tìm kiếm
				$video = $this->get_video_custom($params);
				$video["keywords"] = $params["keywords"];

				//============ ============  ============  ============ 
				//  Lưu vào db
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
				$this->var_log_count_import++;
				echo "Imported: ".$value["videoId"].PHP_EOL;
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
		//============  ============ 
		// Mỗi lần search sẽ có 50 kết quả
		// Số này là cố định của youtube
		//============  ============ 
		$perpage = 50;
		$options = [];
		$j=0;
		$i=0;
		$video=[];
		// Mở nhiều page cho tới khi đủ kết quả mong muốn
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

/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
///
/// START FUNCTION
///
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////

	// Function này dùng để chạy command
	// # php artisan get_video_channel
	public function get_video_channel(){
		$list_channel = [
			[
				'forUsername' => "vtvbooiminhdidauthe",//Bối ơi mình đi đâu thế
			],
			[
				'id' => "UCCkitjrMbVi6wKc3vOeC9lw"// Bữa trưa vui vẻ
			],
			[
				'forUsername' => "ONGIOICAUDAYROIVTV3"// Ơn giời cậu đây rồi
			],
			[
				'forUsername' => "vtvcapdoihoanhao"// Bữa trưa vui vẻ
			],
			[
				'id' => "UCwmurIyZ6FHyVPtKppe_2_A"// Thách thức danh hài
			],
			[
				'forUsername' => "handangplus"// Vui cười
			],
			[
				'id' => "UCo7vprERng61p_oM9UjayrQ"// Film bộ nước ngoài
			],
			[
				'id' => "UC_diyokvxyt0-nl_bCfk8vw"// Film hàn quốc
			],
			
		];
		if(!empty($list_channel)){
			foreach ($list_channel as $key => $value) {
				($this->get_data_video_channel($value));
			}
			$this->get_content_file_video();
		}
	}

	public function show_get_video_channel(){
		$this->get_content_file_video();
		die;
	}

	private function get_data_video_channel($id_channel){
		$max_page_get=(env("MAX_PAGE_IMPORT")?env("MAX_PAGE_IMPORT")+1:10);
		$list_id = ($this->get_id_channel($id_channel));
		$i=0;
		$pageToken=null;
		while(true){
			$i++;
			if($i==$max_page_get)
				break;

				echo '$i: '.$i.PHP_EOL;
				echo '$pageToken: '.$pageToken.PHP_EOL.PHP_EOL;

				$part = 'contentDetails,id,snippet,status';//contentDetails,id,snippet,status
				$option = array(
					'part' => $part,
					'playlistId' => $list_id,//UUwKJsHzpBfPsde70S2UPa4A
					'maxResults' => 50,
					'key' => API_GOOGLE
					);
				if(!empty($pageToken)){
					$option["pageToken"] = $pageToken;
				}
				$url = "https://www.googleapis.com/youtube/v3/playlistItems?".http_build_query($option, 'a', '&');
				
				$curl = curl_init($url);
				curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
				$json_response = curl_exec($curl);
				curl_close($curl);
				$responseObj = @json_decode($json_response);
				$total[] = $responseObj;
				if(!empty($responseObj->nextPageToken)){
					$pageToken = $responseObj->nextPageToken;
				}else{
					$pageToken = '';
					break;
				}
		}//while
		file_put_contents(storage_path().'/data_video/'.$list_id.".json", json_encode($total));
		return;
	}

	private function get_id_channel($id_channel){
		$part = 'contentDetails';
		$option = $id_channel;
		$option['part'] = $part;
		$option['key'] = API_GOOGLE;
		$url = "https://www.googleapis.com/youtube/v3/channels?".http_build_query($option, 'a', '&');
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		$json_response = curl_exec($curl);
		curl_close($curl);
		$responseObj = json_decode($json_response);
		return $responseObj->items[0]->contentDetails->relatedPlaylists->uploads;
	}
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
///
/// END FUNCTION
///
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////



	public function get_content_file_video(){
		$path = storage_path().'/data_video/';
		$dir = scandir($path);
		foreach ($dir as $key => $value) {
			if(preg_match("/\.json$/",$value)){
				$data = (json_decode(file_get_contents($path.$value)));
				foreach ($data as $key2 => $value2) {
					foreach ($value2->items as $key3 => $value3) {
						$params[$key3]["videoId"] = $value3->snippet->resourceId->videoId;
						$params[$key3]["title"] = $value3->snippet->title;
						$params[$key3]["description"] = $value3->snippet->description;
						$params["keywords"] = str_replace(".json", "", $value);
					}
					$this->save_video_by_array($params);
				}
			}
		}
	}


}

