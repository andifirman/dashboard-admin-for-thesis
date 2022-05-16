@extends('layouts.templates')

@section('content')

    <!-- <h2> Log In </h2>
    
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>
        @include('partials.formerrors')
    </form> -->

    <div class="container main-content align-items-center vertical-center">
      <div class="row justify-content-center">


        <div class="col-md-5 px-0 align-items-center">
          <img src="{{ asset('image/earth.png') }}" class="img-fluid">
        </div>

        <div class="col-sm-6">
          <h1 class="text-center mid-range" style="margin-top: 3rem;">
            <span class="titles"> Welcome to </span> 
            <span class="titles title-astronomy"> Solar System </span><br>
            <span class="titles"> for Kids </span>
          </h1>
          
          <form method="POST" action="/login" class="signin-form justify-content-center">
            {{ csrf_field() }}

            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email" id="email" name="email" required>
            </div>
            
            <div class="form-group">
              <input id="password-field" type="password" class="form-control" placeholder="Password" id="password" name="password" required>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
            </div>

            <div class="form-group">
              <div class="w-100 forgot-password-section text-right">
                <a href="#" style="color: #898989;"> Forgot Password </a>
              </div>
            </div>

            <div class="form-group text-center">
              <button type="submit" class="btn btn-light submit-button px-3">
                <span class="font-weight-bold login-button-text" style="font-size: medium;"> LOGIN </span>
              </button>
            </div>
            
            @include('partials.formerrors')
          </form>
        </div>
       



      </div>
    </div>
    
@endsection