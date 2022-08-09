@extends('layouts.templates')

@section('content')

  <h2 class="create-heading d-flex justify-content-start"> Add New Course </h2>

  <form method="post" action="/games" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="titleid" class="col-sm-3 col-form-label"> Course Title </label>
        <div class="col-sm-9">
            <input name="title" type="text" class="form-control" id="titleid" placeholder="Course Title" required
                    value="{{ old('title') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="publisherid" class="col-sm-3 col-form-label"> Publisher </label>
        <div class="col-sm-9">
          <input name="publisher" type="text" class="form-control" id="publisherid"
                  placeholder="Course Publisher" required value="{{ old('publisher') }}">
        </div>
    </div>
    <div class="form-group row">
      <label for="releasedateid" class="col-sm-3 col-form-label"> Release Date </label>
      <div class="col-sm-9">
        <input name="releasedate" type="text" class="form-control" id="releasedateid"
                placeholder="Release Date" required value="{{ old('releasedate') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="gameimageid" class="col-sm-3 col-form-label"> Planet Image </label>
      <div class="col-sm-9">
        <input name="image" type="file" id="gameimageid" class="" required
                value="{{ old('image') }}">
        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="titleid" class="col-sm-3 col-form-label"> Image Source </label>
      <div class="col-sm-9">
          <input name="imagesrc" type="text" class="form-control" id="imagesrc"
                  placeholder="Image Source" required value="{{ old('imagesrc') }}">
        </div>
    </div>
    <div class="form-group row">
      <label for="cover" class="col-sm-3 col-form-label"> Course File </label>
      <!-- Cover stands for course files -->
      <div class="col-sm-9">
        <input name="cover" type="file" id="cover" class="" required
                value="{{ old('cover') }}">
        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="titleid" class="col-sm-3 col-form-label"> Course Source </label>
        <div class="col-sm-9">
          <input name="coursesrc" type="text" class="form-control" id="coursesrc"
                  placeholder="Course Source" required value="{{ old('coursesrc') }}">
        </div>
    </div>



    


    <div class="form-group row">
      <div class="offset-sm-3 col-sm-9">
        <button type="submit" class="btn btn-primary sign-up-btn submit-course"> Submit Course </button>
      </div>
    </div>
  
  @include('partials.formerrors')

@endsection 
 
 
 
 
 
 
 
 
