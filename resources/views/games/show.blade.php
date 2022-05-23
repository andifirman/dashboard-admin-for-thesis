<!-- Fungsi dari carbon itu untuk mendapatkan waktu dari sejak diposting nya review -->

@extends('layouts.templates')

@section('content')

  <div class="row align-items-center" style="border: 1px solid #FFF;">
  
    <div class="col-4 mt-5">
      <h2 class="heading-content"> Planet {{ $game->title }} </h2>
    </div>
  </div>

  <div class="row">
    <div class="col-4 justify-content-center align-items-center" style="border: 1px solid #FFF;">
      <img class="course-img" src="{{ Storage::url($game->image) }}" alt="Card image cap">
    </div>

    <div class="col-6 mt-auto mb-auto" style="border: 1px solid #FFF;">
      <div class="row">
        <div class="col-6 ml-5" style="border: 1px solid #FFF;">
          <h3 class="heading-content"> Deskripsi </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-10 ml-5" style="border: 1px solid #FFF;">
          <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat illum magnam exercitationem sequi corrupti, temporibus deserunt voluptatem, molestias ex velit maxime? Consectetur, aperiam odio? Veniam provident perferendis voluptates non officia. </p>
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
