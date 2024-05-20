<header>
    <nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary pb-0">
        <div class="container-fluid">
          <div class="container">
            <div class="hstack justify-content-between gap-3">
              <a href="/"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <!-- navbar links -->
                  <div class="navbar-nav text-uppercase ms-auto gap-3">
                    @foreach ($navLinks as $navLink)
                    <a class="nav-link d-flex align-items-center" href="/{{ $navLink }}">{{ $navLink }}</a>
                    @endforeach
                  </div>
              </div>
            </div>
        </div>
        </div>
      </nav>
</header>