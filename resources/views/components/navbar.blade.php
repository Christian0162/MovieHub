@push('styles')
    <style>
        .custom-font-nav{
            font-size: 13px;
        }
    </style>
@endpush
<nav class="navbar navbar-expand-lg p-3">
    <div class="container-fluid gap-2">
      <img src="{{asset('images/movie-hub-icon')}}.jpg" alt="" width="35px" height="35px" class="">
      <a class="navbar-brand text-white fs-6 fw-bold" href="{{ route('movie.index') }}">MovieHub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-md-0 custom-font-nav">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>