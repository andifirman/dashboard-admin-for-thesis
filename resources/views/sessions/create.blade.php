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


        <!-- <div class="col-md-5 px-0 align-items-center">
          <img src="{{ asset('image/astronaut.png') }}" class="img-fluid">
        </div> -->

        <div class="col-sm-5">
          <h1 class="mid-range" style="margin-top: 3rem;">
            <!-- <span class="titles"> Welcome to </span> 
            <span class="titles title-astronomy"> Solar System </span><br>
            <span class="titles"> for Kids </span> -->
            <!-- <span class="titles">
              A suitable site for studying about solar system especially for kids
            </span> -->
            <span class="titles">
              Discover the wonder of the solar system
              <i class="fa-solid fa-rocket heading-rocket"></i>
            </span>
          </h1>
          <p class="h6 description-left">
            <span>
              A suitable site for studying about solar system especially for kids
            </span>
          </p>
          <a href="#">
            <button class="btn btn-primary explore-btn">
              Explore
            </button>
          </a>

          <!-- <form method="POST" action="/login" class="signin-form justify-content-center">
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

            <div class="form-group text-center login-button w-70">
              <button type="submit" class="btn submit-login-button form-control">
                <span class="login-button-text"> Login </span>
              </button>
            </div>
            
            @include('partials.formerrors')
          </form> -->
        </div>


        <div class="col-md-5 px-0 align-items-center">
          <img src="{{ asset('image/astronauts-rev.png') }}" class="img-fluid">
        </div>
      </div>
    </div>
    
@endsection