@extends('layout.master1')
@section('link')
<body class="login-cover">
<div class="page-container login-container">

  <!-- Page content -->
  <div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Content area -->
      <div class="content">

        <!-- Advanced login -->
        <form method="POST" action="{{route('signup')}}">
          <div class="panel panel-body login-form">
            <div class="text-center">
              <div class="icon-object border-success text-success"><i class="icon-plus3"></i></div>
              <h5 class="content-group">Create account <small class="display-block">All fields are required</small></h5>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token()}}">
            <div class="content-divider text-muted form-group"><span>Your credentials</span></div>

            <div class="form-group has-feedback has-feedback-left">
              <input type="text" name="name" class="form-control" placeholder="User name">
              <div class="form-control-feedback">
                <i class="icon-user-check text-muted"></i>
              </div>
            </div>

            <div class="content-divider text-muted form-group"><span>Your privacy</span></div>

            <div class="form-group has-feedback has-feedback-left">
              <input type="text" name="email" class="form-control" placeholder="Your email">
              <div class="form-control-feedback">
                <i class="icon-mention text-muted"></i>
              </div>
            </div>

            <div class="form-group has-feedback has-feedback-left">
              <input type="password" name="password" class="form-control" placeholder="Create password">
              <div class="form-control-feedback">
                <i class="icon-user-lock text-muted"></i>
              </div>
            </div>

            <div class="content-divider text-muted form-group"><span>Additions</span></div>

            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" class="styled" checked="checked">
                  Send me <a href="#">test account settings</a>
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" class="styled" checked="checked">
                  Subscribe to monthly newsletter
                </label>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" class="styled">
                  Accept <a href="#">terms of service</a>
                </label>
              </div>
            </div>

            <button type="submit" class="btn bg-teal btn-block btn-lg">Register <i class="icon-circle-right2 position-right"></i></button>
          </div>
        </form>
        <!-- /advanced login -->

@endsection
