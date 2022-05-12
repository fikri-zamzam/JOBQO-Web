<table>
    <thead>
        <th>Nama</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Alamat</th>
    </thead>
    <tbody>
        <tr>
            <td>{{ $nama }}</td>
            <td>{{ $email }}</td>
            <td>sssss</td>
            <td>sssss</td>
        </tr>
    </tbody>
</table>

<a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
</a>
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{url('Admin')}}">Halaman Admin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('HRD')}}">Halaman Penjual</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('Pekerja')}}">Halaman Pembeli</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('logout') }}">Logout</a>
    </li>
</ul>