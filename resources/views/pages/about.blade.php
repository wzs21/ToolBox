@extends('layout.master')

@section('content')

<h1>About Us</h1>

@if(count($people))
	<h3>Team Member</h3>
	<ul>
		@foreach ($people as $person)
			<li>{{$person}}</li>
		@endforeach
	</ul>
@else
	<h3>Nothing to display</h3>	
@endif

@stop