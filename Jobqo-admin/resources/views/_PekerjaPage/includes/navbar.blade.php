<nav class="navbar navbar-expand-lg navbar-dark py-4">
    <a href="{{ url('/') }}" class="navbar-brand">
        <img src="{{ url('images/logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav gap-2">
            <li class="nav-item">
                <a href="#" class="nav-link">Pelajari</a>
            </li>
            <hr class="navbar-inline">
            <li class="nav-item me-lg-3">
                <a href="/logout-user" class="nav-link">FAQ</a>
            </li>

            @if ($isLogin == "true")
                <li class="nav-item me-lg-3">
                    <a href="" class="nav-link">{{ Auth::user()->name }}</a>
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
