
@extends('layouts.templates')

@section('content')

    <h2>Add a Review for {{$game->title}}</h2>

    <div class="addreview">
        <div class="card-block">
            <form method="POST" action="/games/{{ $game->id }}/reviews">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Add a review!"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary"> Add a review! </button>
                </div>
                @include('partials.formerrors')
            </form>
        </div>
    </div>

@endsection
