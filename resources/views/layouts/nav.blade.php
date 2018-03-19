<div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="#">New features</a>
        <a class="nav-link" href="/register">Register</a>
        @if (Auth::check())
          <a class="nav-link" href="posts/create">CREATE A POST</a>
          <a class="nav-link ml-auto" href="#"> <strong>{{ Auth::user()->name  }} </strong></a>
        @endif
      </nav>
    </div>
  </div>