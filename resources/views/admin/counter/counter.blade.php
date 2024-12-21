@extends('layouts.admin')
@section('title')
    Counter
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
                        </span> Counter
                    </h3>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <h4 class="card-title">All Counters</h4>
                                    <a class="float-end btn btn-success" href="{{ route('admin.counter.add') }}">Add
                                        Counter</a>
                                </div>
                                </p>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Number</th>
                                            <th>Icon</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($data['counters'])
                                            @foreach ($data['counters'] as $counter)
                                                <tr>
                                                    <td>{{ $counter->title }}</td>
                                                    <td>{{ $counter->number }}</td>
                                                    <td><img src="{{ asset($counter->icon) }}" alt=""></td>
                                                    <td><a href="{{ route('admin.counter.add', $counter->id) }}"
                                                            class="btn btn-sm btn-info">Edit</a>
                                                        <a href="{{ route('admin.counter.delete', $counter->id) }}"
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
