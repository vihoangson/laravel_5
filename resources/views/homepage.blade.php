@extends("layouts/layout_1")

@section("body")
	@section("title")
		{{$title or $default_title}}
	@endsection
	@section("title_content")
		Video
	@endsection
	@section("content")
		<h1>Title</h1>
		<p>asdfdfasdfasdf</p>
	@endsection

	<!-- /.panel -->
	@section ('pane2_panel_title', 'Chat')
	@section ('pane2_panel_body')
		<p>ádlfkjasdlfkj</p>
		<!-- /.panel .chat-panel -->
	@endsection
	@section ('pane2_panel_footer')
		<p>Nội dung 123</p>
		<!-- /.panel .chat-panel -->
	@endsection
	@include('widgets.panel', array('header'=>false, 'as'=>'pane2'))

	<!-- /.panel -->
	@section ('pane3_panel_title', 'Chat')
	@section ('pane3_panel_body')
		<p>ádlfkjasdlfkj</p>
		<!-- /.panel .chat-panel -->
	@endsection
	@section ('pane3_panel_footer')
		<p>Nội dung 123</p>
		<!-- /.panel .chat-panel -->
	@endsection
	@include('widgets.panel', array('header'=>false, 'as'=>'pane3'))
@stop
