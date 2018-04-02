@extends('layouts.master')

@section ('content')

	<div class="col-md-8 blog-main">
		<h3 class="blog-post-title">{{ $post->title }}</h3>

		<p class="blog-post-meta">
  			{{ $post->user->name }} on
    		{{ $post->created_at->toFormattedDateString() }}
  		</p>
		{{ $post->body }}

		<hr>

	  	<div class="comments">

	  		<ul class="list-group">
	    		@foreach ( $post->comments as $comment)
	    			<li class="list-group-item">
	    				<strong>
	    					{{ $comment->user->name  }} on
	    					{{ $comment->created_at->diffForHumans() }}: &nbsp;
	    				</strong>
	    				{{ $comment->body }}
	    			</li>
	    		@endforeach
	    	</ul>
	    </div>

	    <hr>

	    <div class="card">
	    	<div class="card-body">
	    		<form method="POST" action="/posts/{{ $post->id }}/comments">

	    			{{ csrf_field() }}

	    			<div class="form-group">
	    				<textarea name="body" placeholder="Your comment here." class="form-control" ></textarea>
	    			</div>

	    			<div class="form-group">
		  				<button type="submit" class="btn btn-default">Add Comment</button>
		  			</div>
	    		</form>

	    		@include('layouts.errors')
	    	</div>
	    </div>

	</div>

@endsection