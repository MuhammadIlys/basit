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
                            <div class="card-body table-responsive">
                              <div class="d-flex flex-row justify-content-between align-items-center">
                                  <h4 class="card-title">About</h4>
                                  <a class="float-end btn btn-success" href="{{ route('admin.about.add') }}">Add about</a>
                              </div>
                              </p>
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th>Intro</th>
                                    <th>Title</th>
                                    <th>Email</th>
                                    <th>DOB</th>
                                    <th>Address</th>
                                    <th>Zip</th>
                                    <th>Phone</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                  @if($data['about'])
                                  @foreach ($data['about'] as $about)
                                  <tr>
                                      <td>{{ $about->intro }}</td>
                                      <td>{{ $about->title }}</td>
                                      <td>{{ $about->email }}</td>
                                      <td>{{ $about->date_of_birth }}</td>
                                      <td>{{ $about->address }}</td>
                                      <td>{{ $about->zip }}</td>
                                      <td>{{ $about->phone }}</td>
                                      <td class="text-wrap">{{ $about->description }}</td>
                                      <td><img src="{{ asset($about->image) }}" style="width:100px;height:100px" alt=""></td>
                                      <td><a href="{{ route('admin.about.add',$about->id) }}" class="btn btn-sm btn-info">Edit</a>
                                          <a href="{{ route('admin.about.delete',$about->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                      </td>
                                    </tr>
                                  @endforeach
                                  @endif
                                </tbody>
                              </table>
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
