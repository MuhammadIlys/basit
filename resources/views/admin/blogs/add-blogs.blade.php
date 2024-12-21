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
                            <div class="card-body">
                                <h4 class="card-title">Blog</h4>
                                <form class="forms-sample" method="POST" action="{{ $blog ? route('admin.blog.update',$blog->id) : route('admin.blog.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="title">Blog title</label>
                                            <input type="text" class="form-control" name="title" id="title"
                                                placeholder="Blog Title" value="{{ @$blog->title }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="category">Blog category</label>
                                            <input type="text" class="form-control" name="category" id="category"
                                                placeholder="Blog category in one world (digitalmarketing)" value="{{ @$blog->category }}">
                                                @error('category')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="status">Blog status</label>
                                            <input type="text" class="form-control" name="status" id="status"
                                                placeholder="Blog status (1=visible,0=hide : default:1)" value="{{ @$blog->status }}">
                                                @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="image">Blog Thumbnail</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                            @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="short_desc">Short Description</label>
                                            <textarea type="text" class="form-control" id="short_desc" name="short_desc"
                                                placeholder="Short Description">{{ @$blog->short_desc }}</textarea>
                                                @error('short_desc')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="long_desc">Long Description <span class="text-info">(will be shown in blog details page)</span></label>
                                            <textarea class="summernote" name="long_desc" id="long_desc">
                                                {{ @$blog->long_desc }}
                                            </textarea>
                                            @error('long_desc')
                                                    <span class="text-danger">{{ $message }}</span>
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
