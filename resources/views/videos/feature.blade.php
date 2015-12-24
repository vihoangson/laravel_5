@extends("layouts/layout_video")
@section("title","Video")


@section("content_list_video")
    <section class="row recent_uploads">
        <div class="container">
            <div class="row title_row">
                <h3>recent uploads</h3>
            </div>
            <div class="row media-grid content_video_posts">
                @foreach($rs as $key => $value)
                <article class="col-sm-3 video_post postType3">
                    <div class="inner row m0">
                        <a href="single-video-{{$value->id}}.html"><div class="row screencast m0">
                            <img src="http://img.youtube.com/vi/{{$value->videos_url}}/0.jpg" alt="" class="cast img-responsive">
                            <div class="play_btn"></div>
                            <div class="media-length">17:30</div>
                        </div></a>
                        <div class="row m0 post_data">
                            <div class="row m0"><a href="single-video-{{$value->id}}.html" class="post_title">{{str_limit($value->videos_title,30)}}</a></div>
                            <div class="row m0">
                                <div class="fleft author">by <a href="#">Masum Rana</a></div>
                                <div class="fleft date">{{$value->created_at}}</div>
                            </div>
                        </div>
                        <div class="row m0 taxonomy">
                            <div class="fleft category"><a href="category.html"><img src="<?= THEME_PATH; ?>images/icons/cat.png" alt="">Art</a></div>
                            <div class="fright views"><a href="#"><img src="<?= THEME_PATH; ?>images/icons/views.png" alt="">{{number_format($value->videos_viewcount)}}</a></div>
                        </div>
                    </div>
                </article>
                @endforeach
                <div class="row m0">
                    <div class="clearfix"></div>
                    <a href="/feature.html" class="">Load more videos</a>
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

