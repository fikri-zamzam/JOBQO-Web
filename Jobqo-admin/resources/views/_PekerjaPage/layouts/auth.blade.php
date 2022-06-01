<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | JOBQO</title>

    @include('_PekerjaPage.includes.style')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark py-4">
        <div class="container">
            <a href="/" class="navbar-brand">
                <img src="{{ url('images/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item">
                        <a href="{{ url('/testPage') }}" class="nav-link btn btn-yellow">Perusahaan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    @include('_PekerjaPage.includes.script')
</body>

</html>