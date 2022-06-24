<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="{{ asset('img/jobqo-title.png') }}" type="image/ico" />

    <title>{{ $title }} | JOBQO</title>

    {{-- awal ubah css menjadi asset --}}

    <!-- Bootstrap -->
    <link href="{{ asset('templates_assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('templates_assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('templates_assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('templates_assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('templates_assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('templates_assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('templates_assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('templates_assets/build/css/custom.min.css') }}" rel="stylesheet">

    {{-- Trix css --}}

    <link rel="stylesheet" href="{{ asset('js/trix/trix.css') }}">

    {{-- akhir ubah css menjadi asset --}}

    {{-- bootstrap 4 --}}
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>JOBQO</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                @if ($imgProfile != NULL)
                  <img src="{{ asset('img/'.$imgProfile) }}" alt="..." class="img-circle profile_img">
                @else
                  <img src="{{ asset('img/user-profile.png') }}" alt="..." class="img-circle profile_img">
                @endif
                
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ $username }}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('layouts.sidebar')
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    
                    @if ($imgProfile != NULL)
                      <img src="{{ asset('img/'.$imgProfile) }}" alt="..." class="img-circle">
                    @else
                      <img src="{{ asset('img/user-profile.png') }}" alt="..." class="img-circle">
                    @endif

                    {{ $fullname }}
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->roles == "HRD")
                      <a class="dropdown-item" href="{{ url('/hrd/setting-hrd/'.Auth::user()->id) }}">Edit Profile HRD <i class="fa fa-user pull-right"></i> </a>
                      <a class="dropdown-item" href="{{ url('/hrd/setting-company/'.Auth::user()->companies_id) }}">Ubah Profile Perusahaan <i class="fa fa-pencil-square-o pull-right"></i> </a>
                      <a class="dropdown-item" href="{{ url('/') }}">Web Publik <i class="fa fa-globe pull-right"></i> </a>
                    @endif
                    <form action="{{ url('/logout-admin') }}" method="POST">
                      @csrf
                      <button type="submit" class="dropdown-item">Logout <i class="fa fa-sign-out pull-right"></i></button>
                    </form>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>


        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>{{ $subtitle1 }}</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> {{ $subtitle2 }} </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if(session()->has('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                      </div>
                    @endif
                    @yield('content')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    {{-- ubah js mennjadi asset  --}}

    <!-- jQuery -->
    <script src="{{ asset('templates_assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('templates_assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('templates_assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('templates_assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('templates_assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('templates_assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('templates_assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('templates_assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('templates_assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('templates_assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('templates_assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('templates_assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('templates_assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('templates_assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('templates_assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    
    {{-- trix Rich Editor --}}
    <script src="{{ asset('js/trix/trix.js') }}"></script>
    <script src="{{ asset('js/trix/attachments.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('templates_assets/build/js/custom.min.js') }}"></script>
    <script src="{{ asset('templates_assets/build/js/decimal.js') }}"></script>
	
    {{-- akhir ubahan js menjadi asset --}}
  </body>
</html>
