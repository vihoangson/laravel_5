<?php
namespace App\Http\Controllers;

use Log;
use App\Models\Videos;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CheckArticlesRequest;
use App\Http\Controllers\Controller;
use google\apiclient\src\Google\Service\YouTube;

class HomepageController extends Controller
{
	public function __construct(){
		define("API_GOOGLE","AIzaSyClzC3syB5Ig4vpjgsvkHF2mEU9kTpi4C4");
		$this->video_per_result = 50;
		if(\Session::get("user")!="ok"){
			$this->middleware('auth');
		}
	}

	public function show(){
		$rs = Videos::limit(32)->orderBy("videos_viewcount","desc")->get();
		return view("homepage.homepage",compact("rs"));
	}

	public function search(Request $request){
		$keywords = $request->get("keywords");
		$rs = Videos::where("videos_title",'like', '%'.$keywords.'%')->paginate(16);
		
		return view("videos.search",compact("rs"));
	}

	public function category($id){
		$rs = Videos::where("videos_cat",$id)->paginate(16);
		return view("videos.category",compact("rs"));
	}

	public function single_detail($id=null){
		if(empty($id)){
			abort(404);
		}
		$rs = Videos::find($id);
		$relation = Videos::where("videos_cat",$rs->videos_cat)->orderBy("videos_viewcount","desc")->limit(4)->get();
		$newest = Videos::where("videos_cat",$rs->videos_cat)->orderBy("id","desc")->limit(4)->get();
		return view("videos/single-detail",compact("rs","relation","newest"));
	}

	public function show_by_cat(){
		$videos_cat = Videos::groupBy("videos_cat")->get();
		foreach ($videos_cat as $key => $value) {
			$data[$value->videos_cat] = Videos::orderBy("videos_viewcount","desc")->where("videos_cat",$value->videos_cat)->limit(6)->get();
		}
		$options = [
			"videos_cat"=>$videos_cat
		];
		return view("videos.show",compact("data","options"));
	}

	public function feature_video(){
		$videos_cat = Videos::groupBy("videos_cat")->get();
		foreach ($videos_cat as $key => $value) {
			$data[$value->videos_cat] = Videos::orderBy("videos_viewcount","desc")->where("videos_cat",$value->videos_cat)->limit(6)->get();
		}
		$options = [
			"videos_cat"=>$videos_cat
		];
		return view("videos.feature",compact("data","options"));
	}

	public function ajax_video_load_more(){
		$rs = Videos::limit(30)->get();
		return view("videos.ajax_video_load_more",compact("rs"));
	}


}

