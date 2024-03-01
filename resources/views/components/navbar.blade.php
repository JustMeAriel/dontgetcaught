<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">DONT GET CAUGHT!!!</a>
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
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/database/migrations/2024_02_04_111459_create_table_galeri.php">Migration</a></li>
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/app/Models/Galeri.php">Model</a></li>
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/routes/web.php">Routes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Controller
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/app/Http/Controllers/GaleriController.php">GaleriController</a></li>
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/app/Http/Controllers/AuthController.php">AuthController</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Auth
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/resources/views/Auth/login.blade.php">login.blade.php</a></li>
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/resources/views/Auth/register.blade.php">register.blade.php</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            galeri
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/resources/views/galeri/index.blade.php">index.blade.php</a></li>
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/resources/views/galeri/create.blade.php">create.blade.php</a></li>
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/resources/views/galeri/edit.blade.php">edit.blade.php</a></li>
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/resources/views/galeri/show.blade.php">show.blade.php</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            layouts
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://raw.githubusercontent.com/JustMeAriel/web-galeri-laravel/main/resources/views/layouts/app.blade.php">app.blade.php</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>