@extends("layouts/layout_video")
@section("title","Trang chủ Video")

<script>
    $(".screencast").each(function(){
        if($(this).height()==90){
            $(this).parents("article");
        }
    });
</script>

@section("slide_upload")
    <section class="row upload_media">
        <div class="container">
            <div class="row">
                <h2>Upload Media Files &amp; Share Online</h2>
                <h3>Share your momments online easily</h3>

                <form action="/file-upload" class="dropzone" id="upload_media">
                    <div class="inner row m0">
                        <div class="row m0 plus_ico">+</div>
                        <input type="file" name="file" id="media_up_btn" class="sr-only">
                        <label for="media_up_btn">Upload Media</label>
                    </div>
                </form>
            </div>
        </div>
    </section> <!--Upload Form-->
@stop



@section("content_list_video")
    <section class="row recent_uploads">
        <div class="container">
            <div class="row title_row">
                <h3>recent uploads</h3>
            </div>
            <div class="row media-grid content_video_posts">
	            @foreach($rs as $key => $value)
                    @include("widgets.ele_video",compact("value"))
	            @endforeach
                <div class="row m0">
                    <div class="clearfix"></div>
                    <a href="/inc/more-uploads-1.html" class="load_more_videos">Load more videos</a>
                </div>
            </div>
        </div>
    </section> <!--Recent Upload-->
    <section class="row">
        <div class="container">
            <div class="row advertise_row">
                <h3>Advertise Here</h3>
            </div>
        </div>
    </section> <!--Advertise Row-->
@stop

@section("slide1")
<section class="row sidebar sidebar1">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 widget widget1 widget_post_from_blog">
                    <h5 class="widget_title">post from the blog</h5>
                    <div class="row m0 inner">
                        <article class="post_from_blog row m0">
                            <div class="featured_img row m0"><a href="#"><img src="<?= THEME_PATH; ?>images/blog/widget/1.jpg" alt="" class="img-responsive"></a></div>
                            <div class="the_title row m0"><a href="#">Ut enim ad minim veniam, quis nostrud</a></div>
                        </article>
                        <article class="post_from_blog row m0">
                            <div class="featured_img row m0"><a href="#"><img src="<?= THEME_PATH; ?>images/blog/widget/2.jpg" alt="" class="img-responsive"></a></div>
                            <div class="the_title row m0"><a href="#">Ut enim ad minim veniam, quis nostrud</a></div>
                        </article>
                    </div>
                </div>
                <div class="col-sm-3 widget widget2 widget_recommended_to_follow">
                    <h5 class="widget_title">recommended to follow</h5>
                    <div class="row m0 inner">
                        <div class="media">
                            <div class="media-left"><a href="page-author.html"><img src="<?= THEME_PATH; ?>images/follow/1.jpg" alt="" class="circle"></a></div>
                            <div class="media-body media-middle">
                                <a href="page-author.html"><h5>Lisa Zing Lung</h5></a>
                                <div class="btn-group">
                                    <a href="#" class="btn follower_count">34,000</a>
                                    <a href="#" class="btn follow">follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"><a href="page-author.html"><img src="<?= THEME_PATH; ?>images/follow/2.jpg" alt="" class="circle"></a></div>
                            <div class="media-body media-middle">
                                <a href="page-author.html"><h5>Lisa Zing Lung</h5></a>
                                <div class="btn-group">
                                    <a href="#" class="btn follower_count">34,000</a>
                                    <a href="#" class="btn follow">follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"><a href="page-author.html"><img src="<?= THEME_PATH; ?>images/follow/3.jpg" alt="" class="circle"></a></div>
                            <div class="media-body media-middle">
                                <a href="page-author.html"><h5>Lisa Zing Lung</h5></a>
                                <div class="btn-group">
                                    <a href="#" class="btn follower_count">34,000</a>
                                    <a href="#" class="btn follow">follow</a>
                                </div>
                            </div>
                        </div>
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
                <div class="col-sm-3 widget widget3 widget_popular_videos">
                    <h5 class="widget_title">popular videos</h5>
                    <div class="row m0 inner">
                        <div class="media">
                            <div class="media-left"><a href="single-video.html"><img src="<?= THEME_PATH; ?>images/popular/1.jpg" alt=""><span class="duration">17:30</span></a></div>
                            <div class="media-body">
                                <a href="single-video.html">
                                    <h5>Lorem ipsum dolor si amet etur adipis</h5>
                                </a>
                                <div class="row m0 meta_info views">34,000 views</div>
                                <div class="row m0 meta_info posted">1 year ago</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"><a href="single-video.html"><img src="<?= THEME_PATH; ?>images/popular/2.jpg" alt=""><span class="duration">17:30</span></a></div>
                            <div class="media-body">
                                <a href="single-video.html">
                                    <h5>Lorem ipsum dolor si amet etur adipis</h5>
                                </a>
                                <div class="row m0 meta_info views">34,000 views</div>
                                <div class="row m0 meta_info posted">1 year ago</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"><a href="single-video.html"><img src="<?= THEME_PATH; ?>images/popular/3.jpg" alt=""><span class="duration">17:30</span></a></div>
                            <div class="media-body">
                                <a href="single-video.html">
                                    <h5>Lorem ipsum dolor si amet etur adipis</h5>
                                </a>
                                <div class="row m0 meta_info views">34,000 views</div>
                                <div class="row m0 meta_info posted">1 year ago</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left"><a href="single-video.html"><img src="<?= THEME_PATH; ?>images/popular/4.jpg" alt=""><span class="duration">17:30</span></a></div>
                            <div class="media-body">
                                <a href="single-video.html">
                                    <h5>Lorem ipsum dolor si amet etur adipis</h5>
                                </a>
                                <div class="row m0 meta_info views">34,000 views</div>
                                <div class="row m0 meta_info posted">1 year ago</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 widget widget4 widget_sponsored_area">
                    <h5 class="widget_title">sponsored area</h5>
                    <div class="row m0 inner">
                        <div class="row m0 advertise_betweeen_uploads">
                            <div class="inner row m0">
                                <h3>Advertise<br>Here</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--Sidebar / Widgets-->
@stop


	

