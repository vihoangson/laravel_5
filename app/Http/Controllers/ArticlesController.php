<?php
namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CheckArticlesRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
	public function index(){
		$articles = Articles::all();
		return view("homepage")->with("articles",$articles)->with("santo",[1,2]);
	}

}

