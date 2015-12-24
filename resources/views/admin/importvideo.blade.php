@extends("layouts/layout_video")
@section("title","Video")
@section("content_page")
	<div class="container text-center">
		<h3>Các action thao tác import youtube</h3>
		<div id="button-action">
			<input class="form-control array-import" placeholder="key1,key2">
			<p><button class="btn btn-primary" data-action="auto_get_video">auto_get_video</button></p>
			<p><button class="btn btn-primary" data-action="find_duplicate_row_and_delete">find_duplicate_row_and_delete</button></p>
			<p><button class="btn btn-primary" data-action="find_and_delete_video_disable">find_and_delete_video_disable</button></p>
			<p><button class="btn btn-primary" data-action="update_summary_to_viewcount">update_summary_to_viewcount</button></p>
			<p><button class="btn btn-primary" data-action="update_summary_to_duration">update_summary_to_duration</button></p>
			
		</div>
	</div>
	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Modal title</h4>
				</div>
				<div class="modal-body">
				[Report]
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
@stop

@section("script_custom")
<script>
	$("#button-action .btn").click(function(){
		if(!confirm("Bạn có muốn thực hiện hành động này ?")){
			return false;
		}
		$(".loading_box").remove();
		$("#button-action").append('<div class="loading_box"><i class="fa fa-refresh fa-spin"></i> Loading ...</div>');
		var action = $(this).data("action");
		keywords = $(".array-import").val();
		$.get("/admin/import_video/ajax_action/"+action+"/"+keywords,function(data){
			$(".loading_box").remove();
			$("#modal-id .modal-title").html(action);
			$("#modal-id .modal-body").html(data);
			$("#modal-id").modal();
		})
	});
</script>
@stop