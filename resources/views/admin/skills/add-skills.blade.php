@extends('layouts.admin')
@section('title')
My Skills
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
                    </span> My Skills
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">My Skills</h4>
                        <form class="forms-sample" method="POST" action="{{ @$skill ? route('admin.skill.update',$skill->id) : route('admin.skills.store') }}">
                          @csrf
                          <div class="row">

                            <div class="form-group col-12 col-md-6">
                              <label for="skill_title">Skill Title</label>
                              <input type="text" class="form-control" id="skill_title" name="skill_title" placeholder="Skill title" value="{{ @$skill->title }}">
                              @error ('skill_title')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                              <label for="title">Skill number</label>
                              <input type="text" class="form-control" id="skill_number" name="skill_number" placeholder="Skill number" value="{{ @$skill->number }}">
                              @error ('skill_number')
                                <span class="text-danger">{{ $message }}</span>
                              @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                              <label for="title">Skill progress</label>
                              <input type="text" class="form-control" id="skill_progress" name="skill_progress" placeholder="Skill progress" value="{{ @$skill->progress }}">
                              @error ('skill_progress')
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