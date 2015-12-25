@extends("layouts/layout_video")
@section("title","Video")
@section("detail_page")
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
                    <p>{!! $rs->appends(['sort' => 'votes'])->render() !!}</p>
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

