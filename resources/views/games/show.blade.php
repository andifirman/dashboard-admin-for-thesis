<!-- Fungsi dari carbon itu untuk mendapatkan waktu dari sejak diposting nya review -->

@extends('layouts.templates')

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card" style="width: 270px; margin: 5px;">
                <img class="card-img-top" src="{{ Storage::url($game->image) }}" alt="Card image cap">
                <!-- {{ Storage::url($game->image) }} -->
                
                <!-- INI ALTERNATIF KALAU BENER BENER GA BISA -->
                <!-- <img class="card-img-top" src="{{ asset('image/hK07okVkSkkZB92HNkH4luTILsAVnnDUX8NoJRB2.png') }}" alt="Card image cap"> -->
                <!-- ---------------------------------------- -->

                <div class="card-block ">
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
        </div>
        <!-- <div class="col-4">
            @include('partials.activeusers')
        </div> -->
    </div>
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
    </div>

@endsection
