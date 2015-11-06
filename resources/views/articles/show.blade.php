@extends('layout.master')

@section('content')

<h2 class="title">{{$article->title}}</h2>
<p style="font-size:0.7em">{{$article->published_at}}</p>
<p >{{$article->body}}</p>

@stop