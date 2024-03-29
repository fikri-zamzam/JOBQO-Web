<div class="user">
    <div class="d-flex m-auto">
      @if (Auth::user()->img != NULL)
        <img src="{{ asset('img/'.Auth::user()->img) }}" alt="">
      @else
        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=E1FBFB&font-size=0.37" alt="">
      @endif
        <p>{{ Auth::user()->name }}</p>
    </div>
    <hr class="hr-profile">
</div>
<div class="menu">
    <ul class="navbar-nav">
        <li class="nav-link active">
            <i class='bx bx-user'></i>
            <a href="{{ url('/applicant/profile') }}">Biodata</a>
        </li>
        <hr class="nav">
        <li class="nav-link active">
            <i class='bx bx-book'></i>
            <a href="{{ url('/applicant/document') }}">CV Dokumen</a>
        </li>
        <hr class="nav">
        <li class="nav-link active">
            <i class='bx bx-check'></i>
            <a href="{{ url('/applicant/lamaran') }}">Kelola lamaran</a>
        </li>
        <hr class="nav">
    </ul>
</div>
