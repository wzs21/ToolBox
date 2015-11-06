@extends ('layout.master')
@section('content')
<h1>Articles</h1>
	<ul>
		@foreach($articles as $curr_article)
		<article>
			
			<h2><a href = "articles/{{$curr_article->id}}">{{$curr_article->title}}</a></h2>
			 	{{$curr_article->published_at->diffForHumans()}}
			<div class="body">{{$curr_article->body}}</div>
		</article>
		@endforeach
	</ul>
@stop