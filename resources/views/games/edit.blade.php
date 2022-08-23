@extends('layouts.templates')

@section('content')

  <h2> Edit The Course </h2>

  <form method="post" action="{{ route('games.update', $game->id ) }}" enctype="multipart/form-data">
  <!-- <form method="post" action="/games/update/{id} }}"> -->
    {{ csrf_field() }}
    <!-- {{ method_field('GET') }} -->
    

    <div class="form-group row">
      <label for="titleid" class="col-sm-3 col-form-label"> Course Title </label>
        <div class="col-sm-9">
            <input name="title" type="text" class="form-control" id="titleid" placeholder="Course Title" required
                    value="{{ $game->title }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="publisherid" class="col-sm-3 col-form-label"> Publisher </label>
        <div class="col-sm-9">
          <input name="publisher" type="text" class="form-control" id="publisherid"
                  placeholder="Course Publisher" required value="{{ $game->publisher }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="releasedateid" class="col-sm-3 col-form-label"> Release Date </label>
      <div class="col-sm-9">
        <input name="releasedate" type="text" class="form-control" id="releasedateid"
                placeholder="Release Date" required value="{{ $game->releasedate }}">
      </div>
    </div>
    <div class="form-group row">
      <label for="gameimageid" class="col-sm-3 col-form-label"> Planet Image </label>
      <div class="col-sm-9">
        <input name="image" type="file" id="gameimageid" class="form-control-file" required
                value="{{ old('image') }}">
        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="titleid" class="col-sm-3 col-form-label"> Image Source </label>
      <div class="col-sm-4">
          <input name="imagesrc" type="text" class="form-control" id="imagesrc"
                  placeholder="Image Source" required value="{{ $game->imagesrc }}">
        </div>
    </div>
    <div class="form-group row">
      <label for="cover" class="col-sm-3 col-form-label"> Course Files </label>
      <!-- Cover stands for course files -->
      <div class="col-sm-9">
        <input name="cover" type="file" id="cover" class="form-control-file" required
                value="{{ old('cover') }}">
        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
      </div>
    </div>
    <div class="form-group row">
      <label for="titleid" class="col-sm-3 col-form-label"> Course Source </label>
        <div class="col-sm-4">
          <input name="coursesrc" type="text" class="form-control" id="coursesrc"
                  placeholder="Course Source" required value="{{ $game->coursesrc }}">
        </div>
    </div>



    <div class="form-group row">
      <div class="offset-sm-3 col-sm-9">
        <button type="submit" class="btn btn-primary"> Submit Course </button>
      </div>
    </div>
  </form>
  @include('partials.formerrors')

@endsection 
 
 
 
 
 
 
 
 
