@extends('layouts.templates')

@section('content')

  <div class="row">
    <div class="col-8">
      @foreach($reviews as $review)
        <div class="col-12 mb-3">
          <div class="card">
            <div class="card-block">

              <p class="card-text">{{ $review->user->name }} left a <a href="/reviews/{{$review->id}}"> review </a> for 
                  <a href="/games/{{ $review->game->id }}">
                    {{ $review->game->title }}
                  </a> 
                  {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
      
    <div class="col-4">
      @include('partials.activeusers')
    </div>
  </div>

@endsection 