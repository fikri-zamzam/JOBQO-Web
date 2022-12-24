<nav class="navbar navbar-expand-lg navbar-dark py-4">
    <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ url('public_assets/images/logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav gap-2">
            <li class="nav-item">
                <a href="{{ url('learn-more') }}" class="nav-link">Pelajari</a>
            </li>
            <hr class="navbar-inline">
            <li class="nav-item me-lg-3">
                <a href="{{ url('/faq') }}" class="nav-link">FAQ</a>
            </li>

            @if ($isLogin == "true")
                {{-- <li class="nav-item me-lg-3">
                    <a href="" class="nav-link">{{ Auth::user()->name }}</a>
                </li> --}}

                <li class="nav-item">

                      <div class="dropdown">
                          <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{-- <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80"
                                  alt=""> --}}
                              {{ Auth::user()->name }}
                          </a>
                          @if (Auth::user()->roles == "Pekerja")
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ url('applicant/profile') }}">Profile</a>
                              <a class="dropdown-item" href="{{ url('applicant/lamaran') }}">Lamaran</a>
                              <form action="{{ url('/logout-admin') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                              </form>
                          </div>
                          @endif

                          @if (Auth::user()->roles == "HRD")
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="{{ url('/hrd/') }}">Halaman Management</a>
                              {{-- <a class="dropdown-item" href="{{ url('applicant/lamaran') }}">Lamaran</a> --}}
                              <form action="{{ url('/logout-admin') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                              </form>
                          </div>
                          @endif
                      </div>
                  </li>
                
            @else
                <li class="nav-item me-lg-3">
                    <a href="{{ url('/login') }}" class="nav-link btn btn-yellow">Masuk</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/register') }}" class="nav-link btn btn-outline-yellow">Daftar</a>
                </li>
            @endif

        </ul>
    </div>
</nav>
