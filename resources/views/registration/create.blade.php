@extends('layouts.templates')

@section('content')

    <h2>Register</h2>
    <form method="POST" action="/register">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password">

        </div>

       
        <div class="form-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation" required>
        </div>

        <div class="form-group submit-btn">
          <button style="cursor:pointer" type="submit" class="btn btn-primary submit-reg">Submit</button>
        </div>
        @include('partials.formerrors')
    </form>

@endsection 
 
 
 
 
