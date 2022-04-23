@extends('layouts.main')

@section('content')

<div class="col-md-3 col-sm-3  profile_left">
    <div class="profile_img">
      <div id="crop-avatar">
        <!-- Current avatar -->
        <img class="img-responsive avatar-view" src="../../templates_assets/images/picture.jpg" alt="Avatar" title="Change the avatar">
      </div>
    </div>
    <h3>Naufal</h3>

    <ul class="list-unstyled user_data">
      <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
      </li>

      <li>
        <i class="fa fa-envelope user-profile-icon"></i> naufal@gmail.com
      </li>

      <li class="m-top-xs">
        <i class="fa fa-phone user-profile-icon"></i> 08123456789
      </li>

      <li class="m-top-xs">
        <!-- <i class="fa fa-mars-stroke user-profile-icon"></i> -->
        <i class="fa fa-venus-mars user-profile-icon"></i> 
        Female
      </li>
    </ul>

    <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
    <br />

    <!-- start skills -->
    <!-- <h4>Skills</h4>
    <ul class="list-unstyled user_data">
      <li>
        <p>Web Applications</p>
        <div class="progress progress_sm">
          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
        </div>
      </li>
      <li>
        <p>Website Design</p>
        <div class="progress progress_sm">
          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
        </div>
      </li>
      <li>
        <p>Automation & Testing</p>
        <div class="progress progress_sm">
          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
        </div>
      </li>
      <li>
        <p>UI / UX</p>
        <div class="progress progress_sm">
          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
        </div>
      </li>
    </ul> -->
    <!-- end of skills -->

  </div>
  <div class="col-md-9 col-sm-9 ">

    <div class="profile_title">
      <div class="col-md-6">
        <h2>Quote</h2>
      </div>
      <div class="col-md-6">
        <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">
          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
          <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
        </div>
      </div>
    </div>
    <!-- start of user-activity-graph -->
    <!-- conten utama -->
    <div id="" style="width:100%; height:170px;">
    <h4>
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste fugiat repellat, saepe dignissimos laudantium exercitationem modi suscipit dolore blanditiis earum, ex deleniti veniam corrupti molestiae eum reiciendis libero nesciunt tenetur?
      </p>
    </h4>
    </div>
    <!-- end of user-activity-graph -->

    <div class="" role="tabpanel" data-example-id="togglable-tabs">
      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
        <li role="presentation" class=""><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Current Job</a>
        </li>
        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Education</a>
        </li>
        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Document</a>
        </li>
      </ul>
      <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane active " id="tab_content1" aria-labelledby="home-tab">

          <!-- start recent activity -->
          <!-- <ul class="messages">
            <li>
              <img src="../../templates_assets/images/img.jpg" class="avatar" alt="Avatar">
              <div class="message_date">
                <h3 class="date text-info">24</h3>
                <p class="month">May</p>
              </div>
              <div class="message_wrapper">
                <h4 class="heading">Desmond Davison</h4>
                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                <br />
                <p class="url">
                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                  <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                </p>
              </div>
            </li>
            <li>
              <img src="../../templates_assets/images/img.jpg" class="avatar" alt="Avatar">
              <div class="message_date">
                <h3 class="date text-error">21</h3>
                <p class="month">May</p>
              </div>
              <div class="message_wrapper">
                <h4 class="heading">Brian Michaels</h4>
                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                <br />
                <p class="url">
                  <span class="fs1" aria-hidden="true" data-icon=""></span>
                  <a href="#" data-original-title="">Download</a>
                </p>
              </div>
            </li>
            <li>
              <img src="../../templates_assets/images/img.jpg" class="avatar" alt="Avatar">
              <div class="message_date">
                <h3 class="date text-info">24</h3>
                <p class="month">May</p>
              </div>
              <div class="message_wrapper">
                <h4 class="heading">Desmond Davison</h4>
                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                <br />
                <p class="url">
                  <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                  <a href="#"><i class="fa fa-paperclip"></i> User Acceptance Test.doc </a>
                </p>
              </div>
            </li>
            <li>
              <img src="../../templates_assets/images/img.jpg" class="avatar" alt="Avatar">
              <div class="message_date">
                <h3 class="date text-error">21</h3>
                <p class="month">May</p>
              </div>
              <div class="message_wrapper">
                <h4 class="heading">Brian Michaels</h4>
                <blockquote class="message">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth.</blockquote>
                <br />
                <p class="url">
                  <span class="fs1" aria-hidden="true" data-icon=""></span>
                  <a href="#" data-original-title="">Download</a>
                </p>
              </div>
            </li>

          </ul> -->
          <!-- end recent activity -->

        </div>
        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

          <!-- start user projects -->
          <table class="data table table-striped no-margin">
            <thead>
              <tr>
                <th>#</th>
                <th>Project Name</th>
                <th>Client Company</th>
                <th class="hidden-phone">Hours Spent</th>
                <th>Contribution</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>New Company Takeover Review</td>
                <td>Deveint Inc</td>
                <td class="hidden-phone">18</td>
                <td class="vertical-align-mid">
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" data-transitiongoal="35"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>New Partner Contracts Consultanci</td>
                <td>Deveint Inc</td>
                <td class="hidden-phone">13</td>
                <td class="vertical-align-mid">
                  <div class="progress">
                    <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Partners and Inverstors report</td>
                <td>Deveint Inc</td>
                <td class="hidden-phone">30</td>
                <td class="vertical-align-mid">
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>New Company Takeover Review</td>
                <td>Deveint Inc</td>
                <td class="hidden-phone">28</td>
                <td class="vertical-align-mid">
                  <div class="progress">
                    <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                  </div>
                </td>
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