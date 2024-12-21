@extends('layouts.admin')
@section('title')
My Projects
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
                    </span> My Projects
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">My Projects</h4>
                        <form class="forms-sample" method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="form-group col-6">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            </div>
                            <div class="form-group col-6">
                              <label for="category">Category</label>
                              <input type="text" class="form-control" id="category" name="category" placeholder="category">
                            </div>
                            <div class="form-group col-6">
                              <label for="thumbnail">Thumbnail</label>
                              <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="thumbnail">
                            </div>
                            <div class="form-group col-12">
                              <label for="description">Description</label>
                              <textarea  class="form-control" id="description" name="description"placeholder="description"></textarea>
                            </div>

                            <textarea class="summernote" name="longdescription"></textarea>
                          </div>
                          
                          <button type="submit" class="btn btn-gradient-primary me-2 mt-4">Submit</button>
                        </form>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-12 mt-4">
                    {!! $project->long_description !!}
                    <img src="{{ asset($project->thumbnail) }}" alt="">
                  </div> --}}
            </div>
        </div>
        <!-- content-wrapper ends -->

        @include('admin.partials.footer')

    </div>
    <!-- main-panel ends -->
</div>
@endsection