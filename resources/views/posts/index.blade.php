@extends('templates.default')

@section('content')
	
	<h3>Create Post </h3>
	<div class="row">
	    <div class="col-lg-6 {{ $errors->has('body') ? 'has-error' : '' }}">
	        <form role="form-group" action="{{ route('status.post') }}" method="post">
	            <div class="form-group">
	                <textarea placeholder="Write post here..." name="status" class="form-control" rows="5"></textarea>
                @if ( $errors->has('body') )
                    <span class="help-block">{{ $errors->first('body') }}</span>
                @endif
	            </div>
	            <button type="submit" class="btn btn-default">Create</button>
	            <input type="hidden" name="_token" value="{{ Session::token() }}">
	        </form>
	        <hr>
	    </div>
	</div>

	<div class="row">
	    <div class="col-lg-5"> 
	    </div>
	</div>

	


@stop