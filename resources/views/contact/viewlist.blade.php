@extends('templates.master')
@section('sidebar')
	@parent
	<ul>
		<li><a href="#">Link1</a></li>
		<li><a href="#">Link2</a></li>
		<li><a href="#">Link3</a></li>
		<li><a href="#">Link4</a></li>
	</ul>
@stop

@section('content')
	<h1>Nội dung </h1>
	<p>Biến truyền vào: [{{ $son }}]</p>
@stop
