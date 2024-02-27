<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/welcome') }}">DONT GET CAUGHT!!!</a>
    <a class="navbar-brand" href="{{ url('/2024') }}">>//<</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Daftar Codingan
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('galeri.command') }}">Command</a></li>
            <li><a class="dropdown-item" href="{{ route('galeri.migration') }}">Migration</a></li>
            <li><a class="dropdown-item" href="{{ route('galeri.model') }}">Model</a></li>
            <li><a class="dropdown-item" href="{{ route('galeri.controller') }}">Controller</a></li>
            <li><a class="dropdown-item" href="{{ route('galeri.route') }}">Routes</a></li>
            <li><a class="dropdown-item" href="{{ route('galeri.view') }}">Resources/View</a></li>
            <li><a class="dropdown-item" href="{{ route('galeri.view') }}">Layouts</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>