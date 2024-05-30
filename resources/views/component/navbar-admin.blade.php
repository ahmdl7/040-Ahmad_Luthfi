<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><em>Admin</em></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/admin-gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin-collection ">Collection</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </span>
      </div>
    </div>
  </nav>