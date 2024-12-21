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
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <h4 class="card-title">Section Hire Me</h4>
                                <a class="float-end btn btn-success" href="{{ route('admin.hireme.add') }}">Add
                                    Hire me</a>
                            </div>
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (@$hire)
                                            <tr>
                                                <td>{{ $hire->title }}</td>
                                                <td class="text-wrap">{{ $hire->description }}</td>
                                                <td><a href="{{ route('admin.hireme.add', $hire->id) }}"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('admin.hireme.delete', $hire->id) }}"
                                                        class="btn btn-sm btn-danger">Delete</a>
                                                </td>
                                            </tr>
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
