@extends("layouts/layout_video")
@section("title","Video")
@section("breadcrumbs",'<ol class="breadcrumb"><li><a href="/">Trang chủ</a></li><li><a href="/blogs">Blog</a></li><li class="active">'.(isset($rs->id)?"Sửa bài viết":"Thêm mới").'</li></ol>')
@section("script_custom")
  <script src="/assets/bower_components/tinymce/tinymce.jquery.min.js"></script>
  <script>
    tinymce.init({ 
        selector:'textarea.tinymce',
        height: "300 px",
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools"
        ],
    });

    $(document).ready(function() {
    });
    $(".button-media").click(function(event) {
        $.ajax({
            url: '/blogs/popup_img',
            type: 'GET',
            dataType: 'html',
            data: {param1: 'value1'},
        })
        .done(function(data) {
            $(".modal-body").html(data);
            click_img();
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
                
        $("#modal-id").modal();
    });
    function click_img(){
        $("img").click(function(){
            var sssc = "<p><img src='"+$(this).attr("src")+"'></p>";
            var $body = $(tinymce.activeEditor.getBody());
            $body.find('p:last').append(sssc)
            console.log($body);
            //$body.find('p:last').append($('<span>text blah blah</span>'))
        });
    }
  </script>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section("detail_page")
<section class="row post_page_sidebar post_page_sidebar1">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 post_page_uploads">
                    <div class="author_details row m0">
                        <div class="author_cover row m0 hidden">
                            <img src="<?= THEME_PATH; ?>images/author/cover.jpg" alt="">
                        </div>
                        <div class="row hidden">
                            <div class="col-sm-6 author_photo_name">
                                <img src="<?= THEME_PATH; ?>images/author/profile.jpg" alt="" class="img-thumbnail img-circle">
                                <h3>Masum Rana</h3>
                            </div>
                            <div class="col-sm-6 follow_n_count">
                                <div class="btn-group">
                                    <a href="#" class="btn follower_count">34,000</a>
                                    <a href="#" class="btn follow">follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class=" ">
                                <form action="/blogs/{{(isset($rs->id)?$rs->id:"")}}" method="POST" role="form" enctype="multipart/form-data">
                                    {!! (isset($rs->id)?'<input type="hidden" name="_method" value="put" />':"") !!}
                                    <input name="_token" value="{{csrf_token()}}" type="hidden">
                                    <legend>Bài viết</legend>
                                    <div class="form-group">
                                        <label for="">Tiêu đề</label>
                                        <input type="text" name="blog_title" class="form-control" id="" placeholder="Input field" value="{{(isset($rs->blog_title)?$rs->blog_title:"")}}">
                                    </div>
                                    <label for="">Nội dung</label>
                                    <p><button type="button" class="btn btn-default button-media">Media</button></p>
                                    <textarea style="height:100px;" name="blog_content" class="tinymce">{{(isset($rs->blog_content)?$rs->blog_content:"")}}</textarea>
                                    <div class="well"><input type="file" name="userfile"></div>
                                    <hr>
                                    <p><button type="submit" class="btn btn-primary btn-block">Save</button></p>
                                </form>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 sidebar sidebar2">
                    <div class="row m0 sidebar_row_inner">
                        <!--Search Form-->
                        <form action="#" role="search" class="search_form row m0 widget widget_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here" >
                                <span class="input-group-addon"><button type="submit"><img src="<?= THEME_PATH; ?>images/icons/search.png" alt=""></button></span>
                            </div>
                        </form>
                        <!--Sponsored Area-->
                        <div class="row m0 widget widget_sponsored_area">
                            <h5 class="widget_title">sponsored area</h5>
                            <div class="row m0 inner">
                                <div class="row m0 advertise_betweeen_uploads">
                                    <div class="inner row m0">
                                        <h3>Advertise<br>Here</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Recommended to Follow-->
                        <div class="row m0 widget widget_recommended_to_follow">
                            <h5 class="widget_title">recommended to follow</h5>
                            <div class="row m0 inner">
                                <div class="media">
                                    <div class="media-left"><a href="page-author.html"><img src="<?= THEME_PATH; ?>images/follow/4.jpg" alt="" class="circle"></a></div>
                                    <div class="media-body media-middle">
                                        <a href="page-author.html"><h5>Lisa Zing Lung</h5></a>
                                        <div class="btn-group">
                                            <a href="#" class="btn follower_count">34,000</a>
                                            <a href="#" class="btn follow">follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--More Recommended to Follow-->
                        <div class="row m0 widget widget_recommended_to_follow">
                            <h5 class="widget_title">more authors to follow</h5>
                            <div class="row m0 inner">
                                <div class="media">
                                    <div class="media-left"><a href="page-author.html"><img src="<?= THEME_PATH; ?>images/follow/4.jpg" alt="" class="circle"></a></div>
                                    <div class="media-body media-middle">
                                        <a href="page-author.html"><h5>Lisa Zing Lung</h5></a>
                                        <div class="btn-group">
                                            <a href="#" class="btn follower_count">34,000</a>
                                            <a href="#" class="btn follow">follow</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

