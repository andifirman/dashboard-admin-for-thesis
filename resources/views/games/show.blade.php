<!-- Fungsi dari carbon itu untuk mendapatkan waktu dari sejak diposting nya review -->

@extends('layouts.templates')

@section('content')

  <div class="row align-items-center">
  
    <div class="col-7 mt-5">
      <h2 class="heading-content"> {{ $game->title }} Planet  </h2>
    </div>
  </div>

  <div class="row">
    <div class="col-4 justify-content-center align-items-center show-image-content">
      <a href="{{ $game->imagesrc }}"><img class="course-img" src="{{ Storage::url($game->image) }}" alt="Card image cap"></a>
    </div>

    <div class="col-8 mt-auto mb-auto">
      <div class="row">
        <div class="col-6 ml-5 mb-4">
          <h3 class="heading-content"> Description </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-10 ml-5">
        <!-- DIISI SAMA CONTENT YANG ADA DI DALEM FILE .TXT -->
          <p class="content-show" id="content-show">
            {{ file_get_contents(storage_path('app/files/' . $game->cover)) }}
          </p>
        </div>
        <div class="col-10 ml-5 content-show-root">
        <!-- DIISI SAMA URL DARI COURSE (COURSESRC) -->
          <p class="content-show" id="content-show">
            <b> Source: </b><a href="{{ $game->coursesrc }}"> {{ $game->coursesrc }} </a>
          </p>
        </div>
      </div>

      <div class="row mt-5 crud-icon-show">
        <div class="col-10 ml-5 mt-4 d-flex">
          <a href="#" class="p-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Tes Suara">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3.75 10.3125V19.6875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.375 7.1875V22.8125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15 4.0625V25.9375" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M20.625 7.1875V22.8125" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M26.25 10.3125V19.6875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>

          <a href="/games/edit/{{ $game->id }}" class="p-2">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.4584 2.08337H9.37504C4.16671 2.08337 2.08337 4.16671 2.08337 9.37504V15.625C2.08337 20.8334 4.16671 22.9167 9.37504 22.9167H15.625C20.8334 22.9167 22.9167 20.8334 22.9167 15.625V13.5417" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M16.7083 3.14585L8.5 11.3542C8.1875 11.6667 7.875 12.2813 7.8125 12.7292L7.36458 15.8646C7.19791 17 8 17.7917 9.13541 17.6354L12.2708 17.1875C12.7083 17.125 13.3229 16.8125 13.6458 16.5L21.8542 8.29169C23.2708 6.87502 23.9375 5.22919 21.8542 3.14585C19.7708 1.06252 18.125 1.72919 16.7083 3.14585Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M15.5312 4.32288C16.2292 6.81246 18.1771 8.76038 20.6771 9.46871" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>

          <a href="{{ route('games.download', $game->user_id) }}" class="mr-auto p-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M22 10V15C22 20 20 22 15 22H9C4 22 2 20 2 15V9C2 4 4 2 9 2H14" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M22 10H18C15 10 14 9 14 6V2L22 10Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>

          <a href="/games/delete/{{ $game->id }}" class="p-2" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Course Ini?');">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 27.5C21.875 27.5 27.5 21.875 27.5 15C27.5 8.125 21.875 2.5 15 2.5C8.125 2.5 2.5 8.125 2.5 15C2.5 21.875 8.125 27.5 15 27.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M11.4624 18.5375L18.5374 11.4625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M18.5374 18.5375L11.4624 11.4625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
      </div>
      

    </div>
  </div>





    <!-- <div class="row">
        <div class="col-8">
            <div class="card" style="width: 270px; margin: 5px;">
                <img class="card-img-top" src="{{ Storage::url($game->image) }}" alt="Card image cap"> -->
                
                <!-- INI ALTERNATIF KALAU BENER BENER GA BISA -->
                <!-- <img class="card-img-top" src="{{ asset('image/hK07okVkSkkZB92HNkH4luTILsAVnnDUX8NoJRB2.png') }}" alt="Card image cap"> -->
                <!-- ---------------------------------------- -->

                <!-- <div class="card-block ">
                    <h3 class="card-title ">{{ $game->title }}</h3>
                    <p class="card-text">{{ $game->title }} is published by {{ $game->publisher }}</p>
                    <p class="small">Game submitted by user {{ $game->user->name }}</p>
                    <p class="small">
                      File uploaded: 
                      <a href="{{ route('games.download', $game->user_id) }}">
                        {{ $game->cover }}
                      </a>
                    </p>

                    <a href="games" class="btn btn-primary">List All Games</a>
                </div>
            </div>
        </div> -->
        <!-- <div class="col-4">
            @include('partials.activeusers')
        </div> -->
    <!-- </div>
    <hr>

    <div class="reviews">
        <h4>What Gamers Are Saying</h4>
        <ul class="list-group">
            @foreach($game->reviews as $review)
                <li class="list-group-item">{{ $review->body }}
                    <hr>
                    <a href="/reviews/{{$review->id}}">
                        <small class="text-primary">posted {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }} by
                            user {{ $review->user->name }}</small>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="mb-3">
        <h4 class="mt-3"><a href="/reviews/{{$game->id}}/create">Add A Review!</a></h4>
    </div> -->

@endsection
