<div class="blog-post">
  <h3>
    <a href="/posts/{{ $post->id }}">
      {{ $post->title }}
    </a>
  </h3>


  <p class="blog-post-meta">
  	{{ $post->user->name }} on
    {{ $post->created_at->toFormattedDateString() }}
  </p>
  <p> {{ $post->body }} </p>
</div><!-- /.blog-post -->