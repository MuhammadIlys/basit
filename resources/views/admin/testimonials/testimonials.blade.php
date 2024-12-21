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
                  <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <h4 class="card-title">All Counters</h4>
                                <a class="float-end btn btn-success" href="{{ route('admin.testimonial.add') }}">Add
                                    Testimonial</a>
                            </div>
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Profession</th>
                                        <th>message</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (@$testimonials)
                                        @foreach ($testimonials as $testimonial)
                                            <tr>
                                                <td>{{ $testimonial->name }}</td>
                                                <td>{{ $testimonial->profession }}</td>
                                                <td class="text-wrap">{{ $testimonial->message }}</td>
                                                <td><img src="{{ asset($testimonial->image) }}" alt=""></td>
                                                <td><a href="{{ route('admin.testimonial.add', $testimonial->id) }}"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                    <a href="{{ route('admin.testimonial.delete', $testimonial->id) }}"
                                                        class="btn btn-sm btn-danger">Delete</a>
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
