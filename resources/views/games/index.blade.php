@extends('layouts.templates')

@section('content')

  <div class="row justify-content-center">
    <div class="col-11 column-index">
      
      <h2 class="heading-content"> Course List </h2>

      <div class="row row-content">
        <div class="col-3">
          <h5 class="heading-content"> Nama Planet </h4>
        </div>
        <div class="col-7">
          <h5 class="heading-content"> Deskripsi </h4>
        </div>
        <div class="col-2">
          <h5 class="heading-content"> Aksi </h4>
        </div>
      </div>

      <hr style="border-top: 1px solid #C4C4C4; height: 1px;">

      <!-- @file_get_contents(resource_path('views/admin/templates/show.blade.php')); -->

      @foreach($games as $game)
        <div class="row justify-content">
          <div class="col-3">
            <a href="/games/{{ $game->id }}"><h5 class="heading-content"> {{ $game->title }} </h5></a>
          </div>
          <div class="col-7">
            <!-- ISI DESKRIPSI DARI TXT YANG UDAH DISTORE DI DATABASE -->
            <p> 
              
            </p>
          </div>
          <div class="col-2 crud-icon" style="border: 1px solid #BBB;"> 
            <a href="#">
              <!-- <img src="{{ asset('image/icon/edit-2.png') }}" alt="edit"> -->
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.575 4.50003L6.3125 15.3625C5.925 15.775 5.55 16.5875 5.475 17.15L5.0125 21.2C4.85 22.6625 5.9 23.6625 7.35 23.4125L11.375 22.725C11.9375 22.625 12.725 22.2125 13.1125 21.7875L23.375 10.925C25.15 9.05003 25.95 6.91253 23.1875 4.30003C20.4375 1.71253 18.35 2.62503 16.575 4.50003Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M14.8625 6.3125C15.4 9.7625 18.2 12.4 21.675 12.75" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3.75 27.5H26.25" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a> 

            <a href="/games/{{ $game->id }}">
              <!-- <img src="{{ asset('image/icon/eye.png') }}" alt="read"> -->
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.475 15C19.475 17.475 17.475 19.475 15 19.475C12.525 19.475 10.525 17.475 10.525 15C10.525 12.525 12.525 10.525 15 10.525C17.475 10.525 19.475 12.525 19.475 15Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 25.3375C19.4125 25.3375 23.525 22.7375 26.3875 18.2375C27.5125 16.475 27.5125 13.5125 26.3875 11.75C23.525 7.25002 19.4125 4.65002 15 4.65002C10.5875 4.65002 6.47499 7.25002 3.61249 11.75C2.48749 13.5125 2.48749 16.475 3.61249 18.2375C6.47499 22.7375 10.5875 25.3375 15 25.3375Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a> 

            <a href="">
              <!-- <img src="{{ asset('image/icon/close-circle.png') }}" alt="delete"> -->
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 27.5C21.875 27.5 27.5 21.875 27.5 15C27.5 8.125 21.875 2.5 15 2.5C8.125 2.5 2.5 8.125 2.5 15C2.5 21.875 8.125 27.5 15 27.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M11.4625 18.5375L18.5375 11.4625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.5375 18.5375L11.4625 11.4625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a> 
          </div>
        </div>        
      @endforeach



      <!-- @foreach($games as $game)
        <div class="mb-3">
            <div class="card">
              <div class="card-block card-set">
                <h3 class="card-title"><a href="/games/{{ $game->id }}"> {{ $game->title }} </a></h3>
                <p class="card-text"> Published by {{ $game->publisher }} </p>
                <p class="small"> Game submitted by user {{ $game->user->name }} </p>
                <a href="/games/{{ $game->id }}" class="btn btn-primary"> Learn More </a>
            </div>
          </div>
        </div>
      @endforeach -->


    </div>

    <!-- <div class="col-4">
      @include('partials.activeusers')
    </div> -->



    
  </div>

@endsection 