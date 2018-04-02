<aside class="col-md-4 blog-sidebar">
  <div class="p-3 mb-3 bg-light rounded">
    <h4 class="font-italic"><a href='/about'>About</a></h4>
    <p class="mb-0">This Forum is for the problem solvers.</p>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Post Archives</h4>
    <ol class="list-unstyled mb-0">
      @foreach ($archives as $stats)
        <li>
          <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
            {{ $stats['month'].' '.$stats['year'] }}
          </a>
        </li>
      @endforeach
    </ol>
  </div>

  <div class="p-3">
    <h4 class="font-italic">Problem Tags</h4>
    <ol class="list-unstyled mb-0">
      @foreach ($tags as $tag)
        <li>
          <a href="/problems/tags/{{ $tag }}">
            {{ $tag }}
          </a>
        </li>
      @endforeach
    </ol>
  </div>
</aside><!-- /.blog-sidebar -->