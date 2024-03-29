{{-- Sidebar Admin --}}
@if (Auth::user()->roles == "Admin")
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
      <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
      </li>
        <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/admin/applicant') }}">List Applicant</a></li>
            <li><a href="{{ url('/admin/hrd') }}">List HRD</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-briefcase"></i> Jobs <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/admin/jobs') }}">List Pekerjaan</a></li>
            <li><a href="{{ url('/admin/jobs_type') }}">Jenis pekerjaan</a></li>
            <li><a href="{{ url('/admin/jobs_position') }}">Posisi Jabatan</a></li>
            <li><a href="{{ url('/admin/jobs_salary') }}">Range Gaji</a></li>
            
          </ul>
        </li>
        <li><a><i class="fa fa-building-o"></i>Perusahaan <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/admin/companies') }}">List Perusahaan</a></li>
            <li><a href="{{ url('/admin/companies_type') }}">Jenis Perusahaan</a></li>
            <li><a href="{{ url('/admin/companies_sector') }}">Bidang Perusahaan</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-file-text-o"></i>Lamaran <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('admin/lihat_lamaran') }}">Pantau Lamaran</a></li>
            {{-- <li><a href="/">List Kuisoner</a></li> --}}
          </ul>
        </li>
        <li><a><i class="fa fa-check-circle"></i>Permohonan <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/admin/verifyhrd') }}">Apply HRD</a></li>
            <li><a href="{{ url('/admin/verifycompany') }}">Data Perusahaan</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="menu_section">
      <h3>Menu Section</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-windows"></i> Admin <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/admin/admin') }}">List Admin</a></li>
          </ul>
        </li>
                
        <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
      </ul>
    </div>
  </div>
  @endif

  @if (Auth::user()->roles == "HRD")
  {{-- Sidebar HRD --}}
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
      <li><a href="{{ url('/hrd') }}"><i class="fa fa-dashboard"></i> Dashboard </a>
      </li>
        <li><a><i class="fa fa-briefcase"></i> Jobs <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/hrd/jobs') }}">List Pekerjaan</a></li>
            <li><a href="{{ url('/hrd/jobs_salary') }}">Range gaji</a></li>
          </ul>
        </li>
        <li><a><i class="fa fa-file-text-o"></i>Lamaran <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="{{ url('/hrd/lamaran') }}">List Lamaran</a></li>
            {{-- <li><a href="/">List Kuisoner</a></li> --}}
          </ul>
        </li>
      </ul>
    </div>
  </div>
  @endif