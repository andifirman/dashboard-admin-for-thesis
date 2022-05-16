@extends('layouts.templates')

@section('content')

    <div class="col-12 mb-3">
        <div class="card">
            <div class="card-block">
                <h3 class="card-title">{{ $review->body }}</h3>
                <p class="small">a review of <a href="/games/{{ $review->game->id }}">{{ $review->game->title }}</a>
                    submitted by {{ $review->user->name }} {{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</p>
                <a href="/reviews" class="btn btn-primary">List all Reviews</a>
            </div>
        </div>
    </div>

@endsection