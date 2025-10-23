<nav class="navbar navbar-expand-lg bg-purple mb-4">
  <div class="container">
    <a class="navbar-brand text-white fw-bold" href="{{ route('dashboard') }}">🎤 K-Norebang</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('pengelolaan') }}">Event</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('profile') }}">Profile</a></li>
      </ul>
    </div>
  </div>
</nav>
