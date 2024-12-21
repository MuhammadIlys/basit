@extends('layouts.admin')
@section('title')
    Register
@endsection

@section('content')
    <div class="content-wrapper d-flex align-items-center auth" style="height: 100vh !important">

        <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                    {{-- <div class="brand-logo">
                        <img src="{{ asset('admin/assets/images/logo.svg') }}">
                    </div> --}}
                    <h4 class="fw-bold fs-5 text-center">Register</h4>
                    {{-- <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6> --}}
                    <form class="pt-3" action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control form-control-lg" id="name" name="name"
                                placeholder="Username">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control form-control-lg" id="email" name="email"
                                placeholder="Email">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="password" name="password"
                                placeholder="Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-lg" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm Password">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3 d-grid gap-2">
                            <button type="submit"
                                class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                href="">SIGN UP</button>
                  <div class="text-center mt-4 font-weight-light"> Already have an account <a href="{{ route('login') }}" class="text-primary">Login</a>

                        </div>
                        {{-- <div class="text-center mt-4 font-weight-light"> Already have an account? <a href=""
                                class="text-primary">Login</a>
                        </div> --}}
                    </form>
                </div>  
            </div>
        </div>
    </div>
@endsection
