@extends('layouts.admin')
@section('title')
    Testimonials
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
                        </span> Testimonials
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Testimonials</h4>
                                <form class="forms-sample" method="POST" action="{{ @$testimonial ? route('admin.testimonial.update',$testimonial->id) : route('admin.testimonial.store')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="name">Username</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="name" value="{{ @$testimonial->name }}">
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="profession">Profession</label>
                                            <input type="text" class="form-control" id="profession" name="profession"
                                                placeholder="profession" value="{{ @$testimonial->profession }}">
                                            @error('profession')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="message">Message</label>
                                            <textarea type="text" class="form-control" id="message" name="message" placeholder="Enter user message"> {{ @$testimonial->message }}</textarea>
                                            @error('message')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-6">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" id="image" name="image" > 
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
            </div>
            <!-- content-wrapper ends -->

            @include('admin.partials.footer')

        </div>
        <!-- main-panel ends -->
    </div>
@endsection
