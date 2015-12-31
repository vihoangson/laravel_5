<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rs = Blogs::all();
        return view("blogs.index",compact("rs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("blogs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data =[
        "blog_title"   => $request->get("blog_title"),
        "blog_content" => $request->get("blog_content"),
        
        ];
        Blogs::create($data);
        return redirect("/blogs");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rs = Blogs::find($id);
        return view("blogs.show",compact("rs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rs = Blogs::find($id);
        return view("blogs.create",compact("rs"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rs = $request->all();
        $data = [
            "blog_title"   => $rs["blog_title"],
            "blog_content" => $rs["blog_content"],
        ];
        if(!empty($request->file('userfile'))){
            //Upload file
            $imageName = $request->file('userfile')->getClientOriginalName();
            $request->file('userfile')->move(
                base_path() . '/public/uploads/', $imageName
                );
            //Upload file
            $data["blog_image"] = $imageName;
            //
        }
        Blogs::where("id",$id)->update($data);
        return redirect('/blogs/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function popup_img(){
        $dir = scandir(base_path() . '/public/media');
        echo '<div class="row">';
        foreach ($dir as $key => $value) {
            if(preg_match("/.(png|jpg|gif|PNG|JPG|GIF)/", $value)){
                echo "<div class='col-md-3'><div class='thumbnail'><img style='width:200px;' src='/media/".$value."'></div></div>";
                
            }
        }
        echo '</div>';
    }
    public function post_popup_img(Request $request){
        if(!empty($request->file('userfile'))){
            //Upload file
            $imageName = $request->file('userfile')->getClientOriginalName();
            $request->file('userfile')->move(
                base_path() . '/public/media/', $imageName
                );
            //Upload file
            $data["blog_image"] = $imageName;
            echo '<span class="label label-success">Done</span>';
            //
        }else{
            echo '<span class="label label-danger">Error</span>';
        }
        return;
    }
}
