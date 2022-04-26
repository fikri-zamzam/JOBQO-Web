@extends('layouts.main')

@section('content')

<div class="col-md-3 col-sm-3  profile_left">
    <div class="profile_img">
      <div id="crop-avatar">
        <!-- Current avatar -->
        <img style="display:block;" width="150px" height="150px" class="img-responsive avatar-view" src="{{ asset('storage/'. $model->img) }}" alt="Avatar" title="Change the avatar">
      </div>
    </div>
    <h3>{{ $model->name }}</h3>

    <ul class="list-unstyled user_data">
      <li><i class="fa fa-map-marker user-profile-icon"></i> {{ $model->alamat }}
      </li>

      <li>
        <i class="fa fa-envelope user-profile-icon"></i> {{ $model->email }}
      </li>

      <li class="m-top-xs">
        <i class="fa fa-phone user-profile-icon"></i> {{ $model->phone }}
      </li>

      <li class="m-top-xs">
        <!-- <i class="fa fa-mars-stroke user-profile-icon"></i> -->
        <i class="fa fa-venus-mars user-profile-icon"></i> 
        {{ (($model->gender == "L") ? "Male" : "Female") }}
      </li>
    </ul>

    <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
    <br />

  </div>
  <div class="col-md-9 col-sm-9 ">

    <div class="profile_title">
      <div class="col-md-6">
        <h2>Quote</h2>
      </div>
      <div class="col-md-6">
        <div class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
          <span>{{ $model->tgl_lahir }}</span> <b class="caret"></b>
        </div>
      </div>
    </div>
    <!-- start of user-activity-graph -->
    <!-- conten utama -->
    <div id="" style="width:100%; height:170px;">
    <h4>
      <p>
        {{ $model->quote }}
      </p>
    </h4>
    </div>
    <!-- end of user-activity-graph -->

    <div class="" role="tabpanel" data-example-id="togglable-tabs">
      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="true">Lain lain</a>
        </li>
        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Document</a>
        </li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

          <!-- start user projects -->
          <table class="data table table-striped no-margin">
            <thead>
              <tr>
                <th>#</th>
                <th>Tanggal Lahir</th>
                <th>Pendidikan terakhir</th>
                <th>Bekerja di</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>{{ $model->tgl_lahir }}</td>
                <td>{{ $model->education }}</td>
                <td>{{ $model->current_job }}</td>
              </tr>
            </tbody>
          </table>
          <!-- end user projects -->

        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
            photo booth letterpress, commodo enim craft beer mlkshk </p>
        </div>
      </div>
    </div>
  </div>
@endsection