@extends('templates.default')

@section('content')
	
	<div class="row">
		<div class="col-lg-3">
			@include('user.partials.userblock')
			<hr>






		</div>
		<div class="col-lg-3 col-lg-offset-2">

		</div>

	</div>

	<div class="row">
		<div class="col-lg-8">

				@if (!$post->count() )
					<p>No post located</p>
				@else
					@foreach ($post as $p)
					<div class="media">
					    <a class="pull-left" 
		
					    href="#"

					    >
					        <img class="media-object" alt="" height="100px" src="/img/default.png">
					    </a>
					    <div class="media-body">
					        <h4 class="media-heading"><a href="">Dayle</a></h4>
					        <p>It's a lovely day today.</p>
					        <ul class="list-inline">
					            <li>2 days ago</li>
					            <li><a href="#">Like</a></li>
					            <li>10 likes</li>
					        </ul>
<!-- 
					        <div class="media">
					            <a class="pull-left" href="#">
					                <img class="media-object" alt="" src="">
					            </a>
					            <div class="media-body">
					                <h5 class="media-heading"><a href="#">Billy</a></h5>
					                <p>Yes, it is lovely!</p>
					                <ul class="list-inline">
					                    <li>8 minutes ago.</li>
					                    <li><a href="#">Like</a></li>
					                    <li>4 likes</li>
					                </ul>
					            </div>
					        </div> -->

					        <form role="form" action="#" method="post">
					            <div class="form-group">
					                <textarea name="reply-1" class="form-control" rows="2" placeholder="Reply to this status"></textarea>
					            </div>
					            <input type="submit" value="Reply" class="btn btn-default btn-sm">
					        </form>
					    </div>
					</div>
					@endforeach
				@endif




		</div>
	</div>


@stop