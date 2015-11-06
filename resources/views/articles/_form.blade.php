

	
	<div class="form-group">
		{!! Form::label('title',"Title : ")!!}
		{!! Form::text('title',null,['class'=>'form-control'])!!}
	</div>
 
	<div class="form-group">
		{!! Form::label('body',"Body : ")!!}
		{!! Form::textarea('body',null,['class'=>'form-control'])!!}
	</div>

	<?php
	  date_default_timezone_set('America/Chicago');
	?>

	<div class="form-group">
		{!! Form::label('published_at',"Published on : ")!!}
		{!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control'])!!}
	</div>

	<div class="form-group">
		{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control'])!!}
	</div>

	{!! Form::hidden('user_id', 1) !!}