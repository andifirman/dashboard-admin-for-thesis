@extends('layouts.templates')

@section('content')

    <div class="container main-content align-items-center vertical-center">
      <div class="row justify-content-center">

        <div class="col-sm-5">
          <h1 class="mid-range" style="margin-top: 3rem;">

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

        </div>


        <div class="col-md-5 px-0 align-items-center">
          <img src="{{ asset('image/astronauts-rev.png') }}" class="img-fluid">
        </div>
      </div>
    </div>
    
@endsection