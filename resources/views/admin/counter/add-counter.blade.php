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
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Counter</h4>
                                <form class="forms-sample" action="{{ $counter ? route('admin.counter.update', $counter->id) : route('admin.counter.store') }}"
                                    method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="number">Number</label>
                                            <input type="text" class="form-control" id="number" name="number"
                                                placeholder="Counter number" value="{{ @$counter->number }}">
                                                @error('number')
                                                    <span class="text-danger" >{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                placeholder="Counter title" value="{{ @$counter->title }}">
                                                @error('title')
                                                    <span class="text-danger" >{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="icon">Counter icon</label>
                                            <input type="file" class="form-control" id="icon" name="icon"
                                                placeholder="Counter title">
                                                @error('icon')
                                                    <span class="text-danger" >{{ $message }}</span>
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
