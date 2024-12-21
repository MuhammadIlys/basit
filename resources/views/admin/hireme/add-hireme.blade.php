@extends('layouts.admin')
@section('title')
Hire Me
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
                    </span> Hire Me
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Hire Me</h4>
                        <form class="forms-sample" method="POST" action="{{ @$hire ? route('admin.hireme.update',$hire->id) : route('admin.hireme.store') }}">
                          @csrf
                          <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Username" value="{{ @$hire->title }}">
                            @error('title')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" id="description" name="description" placeholder="description">{{ @$hire->description }}</textarea>
                            @error('description')
                              <span class="text-danger">{{ $message }}</span>
                            @enderror
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