

<nav class="navbar-fixed-top navbar-default"  role="navigation" id="navbar">
	<div class="container">
		<div class="navbar-header">
			<a href="{{ route('home') }}" class="navbar-brand">Evangelijs</a>
		</div>
		
		<div class="collapse navbar-collapse">

			@if (Auth::check())
			
			<form action="{{ route('search.results') }}" role="search" class="navbar-form navbar-left">
				<div class="form-group">
					<input type="text" name="query" class="form-control" 
					placeholder="Find people"/>
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
			@endif

			<ul class="nav navbar-nav navbar-right">

				@if(Auth::check())

				<li><a href="{{ route('signout') }}">Sign out</a></li>
				@else
				<li><a href="{{ route('signup') }}">Sign up</a></li>
				<li><a href="{{ route('signin') }}">Sign in</a></li>
				@endif

			</ul>
		</div>
	</div>
</nav>




@if(Auth::check())
		<div class="col-md-3" id="sidebar">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<a href="{{ route('profile.index', ['username' => Auth::user()->getNameOrUsername()] ) }}"><div class="profile-userpic">
					<img height="75px" src="/img/default.png" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{ Auth::user()->getName() }}
					</div>
					<div class="profile-usertitle-job">
						Developer</a>
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->

				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li>
							<a href="{{ route('profile.edit') }}">
							<i class="glyphicon glyphicon-user"></i>
							Update profile </a>
						</li>
						<li>
							<a href="{{ route('status.index') }}">
							<i class="glyphicon glyphicon-pencil"></i>
							Create Post </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
@endif			

@yield('content')