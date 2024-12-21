@extends('layouts.admin')
@section('title')
Services
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
                    </span> Services
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Service</h4>
                        <form class="forms-sample" method="POST" action="{{ @$service ? route('admin.service.update',$service->id) : route('admin.services.store') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="form-group col-12 col-md-6">
                              <label for="service_title">Service Title</label>
                              <input type="text" class="form-control" id="service_title" name="service_title" placeholder="Skill title" value="{{ @$service->title }}">
                              @error ('service_title')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-12 col-md-6">
                              <label for="service_icon">Service Icon</label>
                              <input type="file" class="form-control" id="service_icon" name="service_icon" placeholder="Skill title" >
                              @error ('service_icon')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-12">
                              <label for="service_description">Service Description</label>
                              <textarea  class="form-control" id="service_description" name="service_description" placeholder="Skill title">{{ @$service->description }}</textarea>
                              @error ('service_description')
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