@if (Session::has('info')) <!-- ('info') ir item  Determining If An Item Exists In The Session -->
	<div class="alert alert-info" role="alert">
<!-- Retrieving An Item From The Session -->
		{{ Session::get('info')}}
	</div>

@endif