@extends('layouts.master')

@section ('content')

        <div class="col-md-8 blog-main">

        	<h1>Posts</h1>
        	<hr>
        	@foreach ($posts as $post)
        		@include('posts.post')
        	@endforeach
          
        </div><!-- /.blog-main -->

    
@endsection