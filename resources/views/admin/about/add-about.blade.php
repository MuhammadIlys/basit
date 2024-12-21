@extends('layouts.admin')
@section('title')
    About
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
                        </span> About Me
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">About Me</h4>
                                <form class="forms-sample" action="{{ @$about ? route('admin.about.update', $about->id) : route('admin.about.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="intro">Intro Subtitle</label>
                                            <input type="text" class="form-control" id="intro" name="intro"
                                                placeholder="Intro Subtitle" value="{{ @$about->intro }}">
                                                @error('intro')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Title" value="{{ @$about->title }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Name" value="{{ @$about->full_name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email"
                                                placeholder="Email" value="{{ @$about->email }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="dob">Date of birth</label>
                                            <input type="date" class="form-control" id="dob" name="dob">
                                            @error('dob')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control" id="address" name="address"
                                                placeholder="Enter your address" value="{{ @$about->address }}">
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="zip">Zip Code</label>
                                            <input type="text" class="form-control" id="zip" name="zip"
                                                placeholder="Zip code" value="{{ @$about->zip_code }}">
                                                @error('zip')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                          <label for="phone">Phone</label>
                                          <input type="text" class="form-control" id="phone" name="phone"
                                              placeholder="phone" value="{{ @$about->phone }}">
                                              @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                      </div>
                                        <div class="form-group col-12">
                                            <label for="description">Description</label>
                                            <textarea type="text" class="form-control" id="description" name="description">{{ @$about->description }}</textarea>
                                            @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                </form>
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
