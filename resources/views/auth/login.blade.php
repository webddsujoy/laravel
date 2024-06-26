@extends('layouts.authmaster')

@section('title')Login - {{env('APP_NAME')}}@endsection

@section('content')

<div class="login-section" style=" background-image: url('{{asset('assets/admin/dist/img/login-bg.jpg')}}'); ">
<div class="login-box"  >

  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="" class="h1"><b>{{env('APP_NAME')}}</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
        </div> -->
        <div class="row d-flex justify-content-start">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block my-3" id="user_login">Sign In</button>
          </div>
        </div>
      </form>

      {{-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> --}}
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="{{url('forgot-password')}}">I forgot my password</a>
      </p>
      <!-- <p class="mb-0">
        <a href="{{url('register')}}" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>
@endsection
@section('scripts')
<script src="{{asset('/assets/admin')}}/js/custom/login.js"></script>
@endsection