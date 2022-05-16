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
              
              p
            </p>
          </div>
          <div class="col-2">
            <p> lorem </p>
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