@extends('layouts.templates')

@section('content')

  <h2>Add a game</h2>

  <form method="post" action="/quizzes" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group row">
      <label for="titleid" class="col-sm-3 col-form-label"> Quiz Title </label>
        <div class="col-sm-9">
            <input name="title" type="text" class="form-control" id="titleid" placeholder="Quiz Title" required
                    value="{{ old('title') }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="publisherid" class="col-sm-3 col-form-label"> Publisher </label>
        <div class="col-sm-9">
          <input name="publisher" type="text" class="form-control" id="publisherid"
                  placeholder="Publisher" required value="{{ old('publisher') }}">
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
      <label for="cover" class="col-sm-3 col-form-label"> Quiz File </label>
      <!-- Cover stands for course files -->
      <div class="col-sm-9">
        <input name="cover" type="file" id="cover" class="form-control-file" required
                value="{{ old('cover') }}">
        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
      </div>
    </div>  



    <div class="form-group row">
      <div class="offset-sm-3 col-sm-9">
        <button type="submit" class="btn btn-primary"> Submit Quiz </button>
      </div>
    </div>
  
  @include('partials.formerrors')

@endsection 
 
 
 
 
 
 
 
 
