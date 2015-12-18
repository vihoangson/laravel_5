<?php
namespace App\Http\Controllers;

use App\Articles;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CheckArticlesRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
	public function index(){
		$articles = Articles::all();
		return view("articles")->with("articles",$articles);
	}

	public function store(){
		echo 123;
	}
	public function update($id , Request $request){
		
		$articles = Articles::findOrFail($id);

		$articles->update($request->all());

                return redirect('articles');
	}

	public function edit($id){//truyền mã id của article
	//Tìm article thông qua mã id tương ứng
		$article = Articles::findOrFail($id);
		print_r($article);
		die;
	// Gọi view edit.blade.php hiển thị bải viết
		return view('edit',compact('article'));
	}
}

