<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function index(){
		//echo "function indexsss";
		return view("contact.viewlist")->with("son",123);
	}

	public function showlist(){
		return view("contact.viewlist")->with("son",456);
	}


}
