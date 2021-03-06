@extends("layouts/layout_video")
@section("title","Video")
@section("breadcrumbs",'<ol class="breadcrumb"><li><a href="/">Trang chủ</a></li><li class="active">Blog</li></ol>')
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
                        <div class="media bio_section">
                            <div class="">
                                @foreach($rs as $key => $value)
                                    <div>
                                        @if ($value->blog_image)
                                            @if(file_exists(base_path()."/public/uploads/".$value->blog_image))
                                                <img src="/uploads/{{$value->blog_image}}" style="float:left;width:90px; margin-right:20px;">
                                            @endif
                                        @endif
                                        <h3><a href="/blogs/{{$value->id}}">{{$value->blog_title}}</a></h3>
                                        {{{ strip_tags($value->blog_content) }}}
                                    </div>
                                    <div class="clearfix"></div>
                                    @if(SHOW_EDIT_DELETE)
                                        <a href="/blogs/{{$value->id}}/edit"  class="btn btn-info"><i class="fa fa-pencil"></i> [Edit]</a>
                                        <a href='/blogs/delete/{{$value->id}}' class="btn btn-danger"><i class="fa fa-trash"></i> [Delete]</a>
                                    @endif
                                    <hr>
                                @endforeach
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

