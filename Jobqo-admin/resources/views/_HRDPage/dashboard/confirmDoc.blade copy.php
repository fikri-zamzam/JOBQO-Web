<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulir pendaftaran | JOBQO </title>

    <!-- Bootstrap -->
    <link href="../../../templates_assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../../templates_assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../../templates_assets/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../../../templates_assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Jobqo</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

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
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Daftar Sebagai Perusahaan</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group row pull-right top_search">
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Formulir pendaftaran <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Isi formulir dengan benar</p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Step 1 Data diri HRD</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 Deskripsi Perusahaan</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Step 3 description</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                        <form class="form-horizontal form-label-left">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idName">Nama lengkap <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="idName" name="name" required="required" value="{{ old('name') }}" class="form-control  ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idUsername">Username <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="idUsername" name="username" required="required" value="{{ old('username') }}" class="form-control ">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Gender <span>*</span></label>
                            <div class="col-md-6 col-sm-6 mt-2 ">
                              <div class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="lk" value="L">
                                  <label class="form-check-label" for="lk">
                                    Laki-laki
                                  </label>
                              </div>
                              <div class="form-check-inline">
                                  <input class="form-check-input" type="radio" name="gender" id="pr" value="P">
                                  <label class="form-check-label" for="pr">
                                    Perempuan
                                  </label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Tanggal lahir <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="birthday" class="date-picker form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required="required" type="date">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idAlamat">Alamat <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <textarea class="form-control" name="alamat" id="idAlamat" >{{ old('alamat') }}</textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="idEmail" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="idEmail" class="form-control col" type="email" value="{{ old('email') }}" name="email">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="password1">Password <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="password" id="password1" name="password" required="required" class="form-control  ">
                            </div>
                          </div>
                        </form>

                      </div>
                      <div id="step-2">
                        {{-- <h2 class="StepTitle" >Step 2 Content</h2> --}}
                        
                        {{-- mengisi data perusahaan oleh HRD --}}

                        <form class="form-horizontal form-label-left">

                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="idName">Nama Perusahaan <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="idName" name="name_company" required="required" value="{{ old('name_company') }}" class="form-control  ">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="idEmail" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                              <div class="col-md-6 col-sm-6 ">
                                <input id="idEmail" class="form-control col" type="email" value="{{ old('email') }}" name="email">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="idAlamat">Alamat <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control" name="alamat" id="idAlamat" >{{ old('alamat') }}</textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="idKodepos">Kode Pos <span class="required">*</span>
                              </label>
                              <div class="col-md-2 col-sm-6 ">
                                <input type="text" id="idKodepos" name="kode_pos" required="required" value="{{ old('kode_pos') }}" class="form-control  ">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="idContact">Contact Perusahaan <span class="required">*</span>
                              </label>
                              <div class="col-md-3 col-sm-6 ">
                                <input type="text" id="idContact" name="contact" required="required" value="{{ old('contact') }}" class="form-control ">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="idContact">Bidang Perusahaan <span class="required">*</span>
                              </label>
                              <div class="col-md-3 col-sm-6 ">
                                <select class="form-control" id="idSector" name="company_sector_id">
                                  @foreach ($CompanySector as $sector)
                                  <option value="{{ $sector->id }}">{{ $sector->nameSector }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="idContact">Jenis Perusahaan <span class="required">*</span>
                              </label>
                              <div class="col-md-4 col-sm-6 ">
                                <select class="form-control" id="idSector" name="company_sector_id">
                                  @foreach ($CompanyType as $type)
                                  <option value="{{ $type->id }}">{{ $type->nameType }}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>

                            {{-- SELECT OPTION/ --}}

                            <div class="form-group row">
                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="idWebsite">Website Perusahaan <span class="required">*</span>
                              </label>
                              <div class="col-md-4 col-sm-6 ">
                                <input type="text" id="idWebsite" name="website" required="required" value="{{ old('website') }}" class="form-control  ">
                              </div>
                            </div>
  
                          </form>
  
                      </div>
                      <div id="step-3">
                        <h2 class="StepTitle">Step 3 Content</h2>
                        <p>
                          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                          eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->

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

    <!-- jQuery -->
    <script src="../../../templates_assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../../../templates_assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../../../templates_assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../../../templates_assets/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../../../templates_assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../../../templates_assets/build/js/custom.min.js"></script>

	
  </body>
</html>