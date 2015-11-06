@extends ('layout.master')
@section('content')

<script>
    $('#users').attr("class","active"); 
</script>

<h1>Users</h1>

<div class="container">
	<div class="row">
	@foreach($users as $user)
	     	<div class="col-md-2" >
	       		<img src="/{{$user->photo_path}}" alt="{{$user->photo_path}}" class="img-responsive">
	       		<h4><a href = "users/{{$user->id}}">{{$user->last_name}}, {{$user->first_name}}</a></h4>
	  		</div>
	@endforeach
	</div>
</div>

@stop

