<div class="container">
 <header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">

      @if (Auth::check())
        <a class="text-muted" href="#">{{ Auth::user()->name }}</a>
      @endif

      @if (!(Auth::check()))
        <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
        <a class="btn btn-sm btn-outline-secondary" href="/register">Register</a>
      @endif
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="#">Online Forum</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      @if (Auth::check())
        <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
      @endif
    </div>
  </div>
</header>