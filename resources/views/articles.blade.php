	@foreach($articles as $article)
		<p>Name: [{{$article->name}}]</p>
		<p>Author: [{{$article->author}}]</p>
	@endforeach

	<hr>

	{!! Form::open(['url' => 'articles']) !!}
		{!! Form::label('name','Name:') !!}
		{!! Form::text('name') !!} <br />

		{!! Form::label('author','Author:') !!}
		{!! Form::text('author') !!} </br>

		{!! Form::submit('Them moi')!!}
	{!! Form::close() !!}

	<hr>

	@if ( $errors->any() )
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	<hr>
	@endif


