@extends('layouts.admin')
@section('title')
Slider
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
                    </span> Slider
                </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h4 class="card-title">All Sliders</h4>
                            <a class="float-end btn btn-success" href="{{ route('admin.slider.add') }}">Add
                                Slider</a>
                        </div>
                        </p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Subtitle</th>
                                    <th>Hire Button text</th>
                                    <th>Hire Button link</th>
                                    <th>CV Button text</th>
                                    <th>CV Button link</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @if ($sliders)
                                    @foreach ($sliders as $slider)
                                        <tr>
                                            <td>{{ $slider->title }}</td>
                                            <td>{{ $slider->subtitle }}</td>
                                            <td>{{ $slider->hiretext }}</td>
                                            <td>{{ $slider->hirelink }}</td>
                                            <td>{{ $slider->cvtext }}</td>
                                            <td>{{ $slider->cvlink }}</td>
                                            <td><img src="{{ asset($slider->image) }}" alt=""></td>
                                            <td><a href="{{ route('admin.slider.add', $slider->id) }}"
                                                    class="btn btn-sm btn-info">Edit</a>
                                                <a href="{{ route('admin.slider.delete', $slider->id) }}"
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