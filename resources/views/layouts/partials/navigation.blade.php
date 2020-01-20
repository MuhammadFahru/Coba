<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<div class="container">
  <a href=""><img src="img/Asset.png" width="30%" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse mr-auto navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item @yield('home')">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-item @yield('about')">
        <a class="nav-link" href="{{ route('about') }}">About</a>
      </li>
      <li class="nav-item @yield('contact')">
        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
      </li>
    </ul>
  </div>
</div>
</nav>