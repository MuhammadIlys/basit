@extends('layouts.admin')
@section('title')
    Blogs
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
                        </span> Blogs
                    </h3>
                </div>
                <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body table-responsive">
                          <div class="d-flex flex-row justify-content-between align-items-center">
                              <h4 class="card-title">About</h4>
                              <a class="float-end btn btn-success" href="{{ route('admin.blog.add') }}">Add Blog</a>
                          </div>
                          </p>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Title</th>
                                <th>category</th>
                                <th>Status</th>
                                <th>short description</th>
                                <th>Long description</th>
                                <th>Thumbnail</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              
                              @if($blogs)
                              @foreach ($blogs as $blog)
                              <tr>
                                  <td>{{ $blog->title }}</td>
                                  <td>{{ $blog->category }}</td>
                                  <td>{{ $blog->status }}</td>
                                  <td class="text-wrap">{{ $blog->short_desc }}</td>
                                  <td class="text-wrap">
                                    {{ Str::limit($blog->long_desc, 100) }}
                                  </td>
                                  <td><img src="{{ asset($blog->image) }}" style="width:100px;height:100px" alt=""></td>
                                  <td><a href="{{ route('admin.blog.add',$blog->id) }}" class="btn btn-sm btn-info">Edit</a>
                                      <a href="{{ route('admin.blog.delete',$blog->id) }}" class="btn btn-sm btn-danger">Delete</a>
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
            </div>
            <!-- content-wrapper ends -->

            @include('admin.partials.footer')

        </div>
        <!-- main-panel ends -->
    </div>
@endsection
