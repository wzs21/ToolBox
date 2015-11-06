@extends('layout.master')
@section('content')

<?php
function expandShortUrl($url) {
   $headers = get_headers($url, 1);
   // var_dump($header);
   return $headers['location'];
}
 
// will echo http://www.deluxeblogtips.com
$long_url = expandShortUrl('https://db.tt/OdXzD8wu');
//$long_url = expandShortUrl('https://db.tt/OdXzD8wu');
$long_url .= "&raw=1";
?>
<div class = "row">
<h2>TRANS{{$transaction->id}}</h2>
<p>
	{{$transaction->created_at->formatLocalized('%A %d %B %Y')}} | 
	{{$transaction->created_at->format('h:i A')}}
	<br>
	by <a href="/users/{{$user->id}}">{{$user->last_name}}</a>
</p>
<div class="col-md-6" >
	<div class="embed-responsive embed-responsive-16by9">
		<video class="embed-responsive-item" controls>
		  <source src="{{$long_url}}" type="video/mp4">
		  <source src="movie.ogg" type="video/ogg">
		Your browser does not support the video tag.
		</video>

		<iframe src ="https://db.tt/OdXzD8wu">
		</iframe>
	</div>
	<a href="{{$long_url}}&dl=1">Download video feeds</a>
</div>

<div class="col-md-6" >
<h4>Tools Taken</h4>
	@if( $transaction->tools_taken != null )
		{{$transaction->tools_taken}}
	@else
		None
	@endif

<h4>Tools Returned</h4>
	@if( $transaction->tools_returned != null )
		{{$transaction->tools_returned}}
	@else
		None
	@endif

<h4>Drawers Opened</h4>
	@if( $transaction->drawers_opened != null )
		{{$transaction->drawers_opened}}
	@else
		None
	@endif


</div>

</div>
@stop