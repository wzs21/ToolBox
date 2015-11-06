@extends ('layout.master')
@section('content')

<script>
    $('#tools').attr("class","active"); 
</script>

<h1>Tools</h1>

<div class="container">
	<div class="row">
	@foreach($drawers as $drawer)
	     	<div class="col-md-2" >
	       		<img src="/{{$drawer->photo}}" alt="{{$drawer->photo}}" class="img-responsive">
	       		<h4><a href = "drawer/{{$drawer->id}}">{{$drawer->name}} : {{$drawer->available}}/{{$drawer->total}}</a></h4>
	  		</div>
	@endforeach
	</div>
</div>

@stop