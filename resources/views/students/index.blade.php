@extends('layouts.templates')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top: 45px;">
        <form action="{{ route('student.save') }}" method="post">
          @csrf

          <h4 style="color: #FFF;"> Add New Student </h4><hr>
            <div class="form-group">
              <label for="studentname"> Student Name </label>
              <input type="text" name="name" id="name" class="form-control" placeholder="Enter Student Name">
            </div>
            <button type="submit" class="btn btn-primary btn-block"> Submit </button>
        </form>
      </div>
    </div>
  </div>

@endsection 