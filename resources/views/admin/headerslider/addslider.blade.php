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
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Header Slider</h4>
                        <form class="forms-sample" method="POST" action="{{ @$slider ? route('admin.slider.update',$slider->id) : route('admin.slider.store') }}" enctype="multipart/form-data">
                          @csrf
                          
                          <div class="row">
                            <div class="form-group col-6">
                              <label for="subtitle">Subtitle</label>
                              <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitle" value="{{ @$slider->subtitle }}">
                              @error('subtitle')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-6">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" id="title" name="title" placeholder="title" value="{{ @$slider->title }}">
                              @error('title')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-6">
                              <label for="hirebutton">Hire Button Text</label>
                              <input type="text" class="form-control" id="hirebutton" name="hirebutton" placeholder="Hire Button Text" value="{{ @$slider->hiretext }}">
                              @error('hirebutton')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-6">
                              <label for="hirebuttonlink">Hire button link</label>
                              <input type="text" class="form-control" id="hirebuttonlink" name="hirebuttonlink" placeholder="Hire Button Link" value="{{ @$slider->hirelink }}">
                              @error('hirebuttonlink')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>
                          <div class="row">
                            <div class="form-group col-6">
                              <label for="cvbutton">CV Button Text</label>
                              <input type="text" class="form-control" id="cvbutton" name="cvbutton" placeholder="CV Button Text" value="{{ @$slider->cvtext }}">
                              @error('cvbutton')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                            <div class="form-group col-6">
                              <label for="cvbuttonlink">CV button link</label>
                              <input type="text" class="form-control" id="cvbuttonlink" name="cvbuttonlink" placeholder="CV Button Link" value="{{ @$slider->hirelink }}">
                              @error('cvbuttonlink')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>
                          </div>

                          <div class="row">
                            <div class="form-group col-6">
                              <label for="sliderimage">Slider Image</label>
                              <input type="file" class="form-control" id="sliderimage" name="sliderimage" >
                              @error('sliderimage')
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