<div class="media">
	<a class="pull-left" href="{{ route('profile.index', ['username' => $user->username] ) }}">
		<img class="media-object" alt="" height="50px" src="/img/default.png">
	</a>
	<div class="media-body">
		<h4 class="media-heading"><a href="{{ route('profile.index', ['username' => $user->username] ) }}"> {{ $user->getName() }}</a></h4>
		@if ($user->location)
			<p>{{ $user->location }}</p>
		@endif
	</div>
</div>