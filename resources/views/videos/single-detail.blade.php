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
                            <h2 class="col-sm-8 post_title">Duis aute irure dolor in adipsicing elit perspiciatis omnis</h2>
                            <h2 class="col-sm-4 view_count">3,45,346 <small>View</small></h2>
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
                                        <dd>August 23, 2015</dd>
                                        
                                        <dt>Category:</dt>
                                        <dd>Science &amp; Technology</dd>
                                        
                                        <dt>Video License</dt>
                                        <dd>Standard License</dd>
                                        
                                        <dt>Imported From:</dt>
                                        <dd>Youtube</dd>
                                    </dl>
                                </div>
                            </div>
                            <div class="media-body author_desc_by_author">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
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
                        <!--Recommended for You-->
                        <div class="row m0 widget widget_popular_videos">
                            <h5 class="widget_title">Recommended for you</h5>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

