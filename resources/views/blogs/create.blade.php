@extends("layouts/layout_video")
@section("title","Video")
@section("breadcrumbs",'<ol class="breadcrumb"><li><a href="/">Trang chủ</a></li><li><a href="/blogs">Blog</a></li><li class="active">'.(isset($rs->id)?"Sửa bài viết":"Thêm mới").'</li></ol>')
@section("script_custom")
<script src="/assets/bower_components/tinymce/tinymce.jquery.min.js"></script>
<script src="/assets/bower_components/jquery.form.js"></script>
<script>
    tinymce.init({ 
        selector:'textarea.tinymce',
        plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
        ],
    });
    $(document).ready(function() {  
        var options = { 
            target:   '#output', 
            beforeSubmit:  beforeSubmit,
            uploadProgress: OnProgress, //upload progress callback 
            success:       afterSuccess,
            resetForm: true  
        }; 
        $('#MyUploadForm').submit(function() { 
            $(this).ajaxSubmit(options);            
            return false; 
        });
    });
    function afterSuccess(){
            $(".progress-bar").css({"width":"0%"});
    }
    function beforeSubmit(){
        //$("#progressbox").show();
        //$("#output").load("/blogs/popup_img");

    }
    function OnProgress(event, position, total, percentComplete)
    {
        $(".progress-bar").css({"width":percentComplete+"%"});
        
    }
    $(".button-media").click(function(event) {
        $("#modal-id .modal-body").html('<div class="loading_box"><h3><i class="fa fa-refresh fa-spin"></i> Loading...</h3></div>');
        $.ajax({
            url: '/blogs/popup_img',
            type: 'GET',
            dataType: 'html',
            data: {param1: 'value1'},
        })
        .done(function(data) {
            $(".loading_box").remove();
            $("#modal-id  .modal-body").html(data);
            click_img();
        })
        .fail(function() {
            console.log("error");
        });

        $("#modal-id").modal();
    });

    function click_img(){
        $("img").click(function(){
            var html_img = "<p><img class='img_in_content' src='"+$(this).attr("src")+"'></p>";
            var $body = $(tinymce.activeEditor.getBody());
            var sel = tinyMCE.activeEditor.selection;
            sel.setContent(html_img);  
            $("#modal-id").modal('hide');
            $("#modal-id-upload").modal('hide');

        });
    }
    $(".bton-upload").click(function(){
        $("#output").load("/blogs/popup_img",function (){
            click_img();
        });
        $("#modal-id-upload").modal();
    });
</script>
<style>.navbar-fixed-top{display: none}</style>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-image"></i> Media</h4>
            </div>
            <div class="modal-body"></div>
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
            <div class="">
                <div class="author_details row m0">

                    <div class="modal fade" id="modal-id-upload">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="/blogs/post_popup_img" onSubmit="return false" method="post" enctype="multipart/form-data" id="MyUploadForm">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"><i class="fa fa-upload"></i> Upload file</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class='box-upload'>                        
                                            <input name="_token" value="{{csrf_token()}}" type="hidden">
                                            <input name="userfile" id="imageInput" class="form-control" type="file" />
                                            <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>


<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
  </div>
</div>

                                            <div id="progressbox" style="display:none;"><div id="progressbar"></div ><div id="statustxt">0%</div></div>
                                            <div id="output"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <form action="/blogs/{{(isset($rs->id)?$rs->id:"")}}" method="POST" role="form" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">                            
                                <div class="">
                                    {!! (isset($rs->id)?'<input type="hidden" name="_method" value="put" />':"") !!}
                                    <input name="_token" value="{{csrf_token()}}" type="hidden">
                                    <legend>Bài viết</legend>
                                    <div class="form-group">
                                        <label for="">Tiêu đề</label>
                                        <input type="text" name="blog_title" class="form-control" id="" placeholder="Input field" value="{{(isset($rs->blog_title)?$rs->blog_title:"")}}">
                                    </div>
                                    <label for="">Nội dung</label>
                                    <p><button type="button" class="btn btn-default button-media"><i class="fa fa-image"></i> Media</button>
                                        <button type="button" class='bton-upload btn btn-default'><i class="fa fa-upload"></i> Upload file</button></p>
                                        <textarea style="height:500px;" name="blog_content" class="tinymce">{{(isset($rs->blog_content)?$rs->blog_content:"")}}</textarea>
                                        <div class="well"><input type="file" name="userfile"></div>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                    <div class="panel panel-info">
                                      <div class="panel-heading">
                                        <h3 class="panel-title">Panel title</h3>
                                    </div>
                                    <div class="panel-body">
                                        <button type="submit" class="btn btn-primary btn-block">Save</button>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>                                
                </div>
            </div>
        </div>
    </div>
</section>
@stop

