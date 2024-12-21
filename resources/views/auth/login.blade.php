@extends('layouts.admin')
@section('title')
    Login
@endsection

@section('content')
    <div class="content-wrapper d-flex align-items-center auth" style="height: 100vh">

        <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                {{-- <div class="brand-logo">
                  <img src="../../assets/images/logo.svg">
                </div> --}}
                <h4 class="fw-bold fs-5 text-center">Login</h4>
                {{-- <h6 class="font-weight-light">Sign in to continue.</h6> --}}
                <form class="pt-3" method="POST" action="{{ route('user.login') }}">
                    @csrf
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                  <div class="mt-3 d-grid gap-2">
                    <button type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</a>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                    </div>
                    {{-- <a href="#" class="text-primary">Forgot password?</a> --}}
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
       
    </div>
@endsection
