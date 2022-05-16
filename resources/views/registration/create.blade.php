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

          <!-- <input type="password" class="form-control password-reg" id="password-field" name="password" required>
          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password mx-auto"></span> -->

        </div>

        <!-- <div class="form-group">
          <input id="password-field" type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
        </div> -->

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
 
 
 
 
