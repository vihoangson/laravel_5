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

}

