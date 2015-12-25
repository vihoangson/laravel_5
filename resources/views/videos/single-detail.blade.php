@extends("layouts/layout_video")
@section("title","Video")


@section("detail_page")

<section class="row post_page_sidebar post_page_sidebar1">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 post_page_uploads">
                    <div class="author_details post_details row m0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$rs->videos_url}}"></iframe>
                        </div>
                        <div class="row post_title_n_view">
                            <h2 class="col-sm-8 post_title">{{($rs->videos_title)}}</h2>
                            <h2 class="col-sm-4 view_count">{{number_format($rs->videos_viewcount)}}<small>View</small></h2>
                        </div>
                        <div class="media bio_section">
                            <div class="media-left about_social">
                                <div class="row m0 section_row author_section widget widget_recommended_to_follow">
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
                                </div>
                                <div class="row m0 social_section section_row">
                                    <h5>Social Accounts</h5>
                                    <ul class="list-inline">
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/6.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/7.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/8.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/9.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/10.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/11.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="<?= THEME_PATH; ?>images/icons/social/12.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="row m0 about_section section_row single_video_info">
                                    <dl class="dl-horizontal">
                                        <dt>Publish Date:</dt>
                                        <dd>{{$rs->created_at}}</dd>
                                        
                                        <dt>Category:</dt>
                                        <dd>{{$rs->videos_cat}}</dd>
                                        
                                        <dt>Video License</dt>
                                        <dd>Standard License</dd>
                                        
                                        <dt>Imported From:</dt>
                                        <dd>Youtube</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="media-body author_desc_by_author">
                                {{$rs->videos_note}}
                            </div>
                        </div>
                    </div>
                    <div class="row m0 comments">
                        <h5 class="comment_count">37 Comments:</h5>
                        <div class="media comment">
                            <div class="media-left"><a href="#"><img src="<?= THEME_PATH; ?>images/follow/4.jpg" alt="" class="img-circle"></a></div>
                            <div class="media-body">
                                <div class="comment_header">
                                    <h5>
                                        <a href="#" class="author_name">Lisa Zing Lung Chung</a>
                                        <span class="time_ago">10 minutes ago</span>
                                        <a href="#" class="reply_link">Reply</a>
                                    </h5>                                    
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciat unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <div class="media comment comment_reply">
                                    <div class="media-left"><a href="#"><img src="<?= THEME_PATH; ?>images/follow/4.jpg" alt="" class="img-circle"></a></div>
                                    <div class="media-body">
                                        <div class="comment_header">
                                            <h5>
                                                <a href="#" class="author_name">Lisa Zing Lung Chung</a>
                                                <span class="time_ago">10 minutes ago</span>
                                                <a href="#" class="reply_link">Reply</a>
                                            </h5>                                    
                                        </div>
                                        <p>Sed ut perspiciat unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                    </div>
                                </div> <!--Comment Reply-->
                            </div>
                        </div> <!--Comment-->
                        <div class="media comment">
                            <div class="media-left"><a href="#"><img src="<?= THEME_PATH; ?>images/follow/4.jpg" alt="" class="img-circle"></a></div>
                            <div class="media-body">
                                <div class="comment_header">
                                    <h5>
                                        <a href="#" class="author_name">Lisa Zing Lung Chung</a>
                                        <span class="time_ago">10 minutes ago</span>
                                        <a href="#" class="reply_link">Reply</a>
                                    </h5>                                    
                                </div>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciat unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <div class="media comment comment_reply">
                                    <div class="media-left"><a href="#"><img src="<?= THEME_PATH; ?>images/follow/4.jpg" alt="" class="img-circle"></a></div>
                                    <div class="media-body">
                                        <div class="comment_header">
                                            <h5>
                                                <a href="#" class="author_name">Lisa Zing Lung Chung</a>
                                                <span class="time_ago">10 minutes ago</span>
                                                <a href="#" class="reply_link">Reply</a>
                                            </h5>                                    
                                        </div>
                                        <p>Sed ut perspiciat unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                                    </div>
                                </div> <!--Comment Reply-->
                            </div>
                        </div> <!--Comment-->
                    </div>
                    <form action="#" class="row m0 comment_form">
                        <h5>post your comment:</h5>
                        <textarea class="form-control"></textarea>
                        <input type="submit" value="submit now" class="btn btn default">
                    </form>
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
                        <!--More From the Author-->
                        <div class="row m0 widget widget_popular_videos">
                            <h5 class="widget_title">more from the author</h5>
                            <div class="row m0 inner">
                                @foreach($relation as $key => $value)
                                <div class="media">
                                    <div class="media-left"><a href="/single-video-{{$value->id}}.html"><img src="http://img.youtube.com/vi/{{$value->videos_url}}/3.jpg" alt=""><span class="duration">17:30</span></a></div>
                                    <div class="media-body">
                                        <a href="/single-video-{{$value->id}}.html">
                                            <h5>{{str_limit($value->videos_title,50)}}</h5>
                                        </a>
                                        <div class="row m0 meta_info views">{{number_format($value->videos_viewcount)}} views</div>
                                        <div class="row m0 meta_info posted">1 year ago</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!--Recommended for You-->
                        <div class="row m0 widget widget_popular_videos">
                            <h5 class="widget_title">Recommended for you</h5>
                            <div class="row m0 inner">
                                @foreach($newest as $key => $value)
                                <div class="media">
                                    <div class="media-left"><a href="/single-video-{{$value->id}}.html"><img src="http://img.youtube.com/vi/{{$value->videos_url}}/3.jpg" alt=""><span class="duration">17:30</span></a></div>
                                    <div class="media-body">
                                        <a href="/single-video-{{$value->id}}.html">
                                            <h5>{{str_limit($value->videos_title,50)}}</h5>
                                        </a>
                                        <div class="row m0 meta_info views">{{number_format($value->videos_viewcount)}} views</div>
                                        <div class="row m0 meta_info posted">1 year ago</div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

