@extends('layouts.admin')
@section('title')
    Profile
@endsection

@section('content')
    @include('admin.partials.navbar')
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->

        @include('admin.partials.sidebar')

        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">
                        <span class="page-title-icon bg-gradient-primary text-white me-2">
                            <i class="mdi mdi-home"></i>
                        </span> Profile
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Profile</h4>
                                <form class="forms-sample" action="{{ $profile ? route('admin.profile.update', $profile->id) : route('admin.profile.store') }}"
                                    method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Username" value="{{ @$profile->name }}">
                                                @error('name')
                                                    <span class="text-danger" >{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email" value="{{ @$profile->email }}">
                                                @error('email')
                                                    <span class="text-danger" >{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="phone" value="{{ @$profile->phone }}">
                                                @error('phone')
                                                    <span class="text-danger" >{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="address">address</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="address" value="{{ @$profile->address }}">
                                                @error('address')
                                                    <span class="text-danger" >{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                placeholder="Image">
                                                @error('image')
                                                    <span class="text-danger" >{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->

            @include('admin.partials.footer')

        </div>
        <!-- main-panel ends -->
    </div>
@endsection
