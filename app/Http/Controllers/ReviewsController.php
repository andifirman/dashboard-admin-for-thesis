<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\App;
use App\Models\Game;
use App\Models\Review;
use App\Models\User;

class ReviewsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth')->except(['index', 'show']);
  }


  public function index()
  {
    $reviews = Review::latest()->get();
    
    $activeusers = User::activeusers();

    // $activeusers = User::selectRaw('users.name, count(*) submitted_games')
    //         ->join('games', 'games.user_id', '=', 'users.id')
    //         ->groupBy('users.name')
    //         ->orderBy('submitted_games', 'DESC')
    //         ->get();

    // return view('reviews.index', ['reviews' => $reviews]);
    return view('reviews.index', ['reviews' => $reviews, 'activeusers' => $activeusers]);
  }
    

  public function create(Game $game)
  {
      return view('reviews.create', ['game' => $game]);
  }
    
  public function store(Game $game)
  {
    $this->validate(request(), [
      'body' => 'required|min:3'
    ]);

    $game->addReview(request('body'), auth()->id());
    
    return redirect()->to('/games/' . request()->route()->game->id);
  }
    
  public function show(Review $review)
  {
    // return view('reviews.show', ['review' => $review]);
    
    return view('reviews.show', compact('review'));
  }

}
