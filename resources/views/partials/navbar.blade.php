<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">AppTrain</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <span><i style="font-size: 40px;" class="fa-solid fa-train"></i></span>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('trains') }}">Treni</a>
            <a class="nav-link" href="{{ route('now_trains') }}">Last Minut</a>
            <a class="nav-link" href="{{ route('packages') }}">Offerte</a>
        </div>
      </div>
    </div>
  </nav>
