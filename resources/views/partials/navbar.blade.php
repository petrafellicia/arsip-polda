<nav class="navbar navbar-expand-lg navbar-dark bg-indigo-500">
  <div class="container">
    <a class="navbar-brand" href="/home">Arsip POLDA Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/home">Home</a>
        <a class="nav-link" {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        <a class="nav-link" {{ ($title === "Mails") ? 'active' : '' }}" href="/mails">Daftar Surat</a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>