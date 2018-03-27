@extends('layouts.master')

@section('content')

	<div class="col-md-8 blog-main">
		<h1>create a post</h1>

		<hr>

		<form method="POST" action="/posts">

		{{ csrf_field() }}

		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" placeholder="Write a post title" name="title" >
		  </div>

		  <div class="form-group">
		    <label for="body">Body</label>
		    <textarea id="body" name="body" placeholder="Write a post here" class="form-control" ></textarea>
		  </div>

		  <div class="form-group">
		  	<button type="submit" class="btn btn-default">Post it!</button>
		  </div>

		  @include('layouts.errors')
		</form>

	</div>

@endsection