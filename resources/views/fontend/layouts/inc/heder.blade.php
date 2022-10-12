

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center">
  <div class="container d-flex justify-content-between">

    <div class="logo">
      <h1><a href="{{ url('/') }}"><span>Thepromohelp</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
        @foreach ($categories as $item)
        <li>
        <a class="nav-link scrollto" href="{{ route('website.category', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
        </li>
        @endforeach
        <li><a class="nav-link scrollto" href="{{ url('/about') }}">About Me</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->
