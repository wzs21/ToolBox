@if($current_user != null)

<div class="container">
    <div class="row profile">
		<div class="col-md-2">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<br>
				<div class="profile-userpic">
					<img src="/{{$current_user->photo_path}}" class="img-responsive" alt="{{$current_user->last_name}}">
				</div>
				<!-- END SIDEBAR USERPIC -->

				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
						<a href="/users/{{$current_user->id}}">
							<i class="glyphicon glyphicon-user"></i>
							{{$current_user->first_name}}<br>{{$current_user->last_name}} </a>
						</li>
						
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-cog"></i>
							Profile Setting </a>
						</li>

						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							Help </a>
						</li>
					</ul>

				<div class="profile-userbuttons">
					<center>
					<a href="/auth/logout" class="btn btn-danger btn-sm">Log Out</a>
					</center>
				</div>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">

            <div class="profile-content">
       			
       			@yield('content')
       		
       		</div>

		</div>
	</div>
</div>

@else
	@yield('content')
@endif