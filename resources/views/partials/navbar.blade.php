<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a class="navbar-brand" href="/">Mading JeWePe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Artikel") ? 'active' : '' }}" href="/artikel">Artikel</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          @auth
          <span class="navbar-text px-3">
            Selamat datang, {{ Auth::user()->name }}
          </span>
          <li class="nav-item">
            <a class="nav-link active" href="/logout">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link active" href="/login">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>