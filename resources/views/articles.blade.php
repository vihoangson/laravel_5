@foreach($articles as $article)
	<p>Name: [{{$article->name}}]</p>
	<p>Author: [{{$article->author}}]</p>
@endforeach