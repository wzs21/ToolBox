@extends('layout.master')

@section('content')
<h1>{{$user->last_name}}, {{$user->first_name}}</h1>
<div class="row">
<div class="col-md-4" >
	<h2>Profile</h2>

	@if($current_user->id != $user->id)
	<div class="col-md-6" >
	<img src="/{{$user->photo_path}}" class="img-responsive">	
	</div>
	<div class="col-md-6">
	@else
	<div class="col-md-8">
	@endif
		<h4>{{$user->student_id}}</h4>
		<h4>{{$user->major}}</h4>
		<h4><a href="mailto:{{$user->email}}">{{$user->email}}</a><br></h4>
		<h4>{{$user->phone_number}}<br></h4>
	</div>

</div>

<div class="col-md-8" >
	<h2>Transaction History</h2>
		<ul>
		@foreach($transactions as $transaction)
		 <p class = "list">
			<a href = "/../transactions/{{$transaction->id}}">TRANS {{$transaction->id}}</a>  
			<label>
				on
				{{$transaction->created_at->formatLocalized('%A %d %B %Y')}} | 
				{{$transaction->created_at->format('h:i A')}}
			</label>
		</p>
		@endforeach
		</ul>
</div>
</div>

@stop