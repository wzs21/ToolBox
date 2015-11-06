@extends ('layout.master')
@section('content')

<script>
    $('#transactions').attr("class","active"); 
</script>

<h1>Transactions</h1>
<div class="container">
	<div class="row">
	@foreach($transactions as $transaction)
	
	    <p class = "list">
	    	<a href = "transactions/{{$transaction->id}}">TRANS {{$transaction->id}}</a> by 
	    	<a href = "users/{{$transaction->user->id}}">{{$transaction->user->last_name}}</a>

	    	<label> _ {{$transaction->created_at->diffForHumans()}}</label>
	    </p>
	    
	    <!--
	    <h3><a href = "transaction/{{$transaction->id}}">{{$transaction->created_at->diffForHumans()}} by User {{$transaction->user_id}}</a></h3>
	       			{{$transaction->created_at->formatLocalized('%A %d %B %Y')}}
	       		-->

	@endforeach
	</div>
</div>
@stop