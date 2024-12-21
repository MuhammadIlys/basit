@extends('layouts.admin')
@section('title')
Contact Me
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
                    </span> Contact Me
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Contact Me</h4>
                        <form class="forms-sample">
                          <div class="form-group">
                            <label for="exampleInputUsername1">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
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