<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


use App\Models\Game;
use App\Models\User;

use App\Models\Files;
use Webpatser\Uuid\Uuid;

// use DB;


class GamesController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth')->except(['index', 'show']);
  }

  public function index()
  {
    // $games = Game::all();
    // return view('games.index', ['games' => $games]);


    $games = Game::latest()->get();
        
    $activeusers = User::activeusers();
  
    return view('games.index', ['games' => $games, 'activeusers' => $activeusers]);
  }


  // INI YANG BENER
  public function show(Game $game)
  {
    $activeusers = User::activeusers();
        
    return view('games.show', ['game' => $game, 'activeusers' => $activeusers]);

    // INI NIH BENER BUAT NGATASIN MASALAH NON-OBJECT
    // return view('games.show', compact('game', 'activeusers'));
  }
    

  public function create()
  {
    return view('games.create');
  }


  public function store(Request $request)
  {
    $this->validate(request(), [
      'title' => 'required|unique:games',
      'publisher' => 'required',
      'releasedate' => 'required',
      'image' => 'required',
      'imagesrc' => 'required',
      'cover' => 'required|mimes:txt',
      'coursesrc' => 'required',
    ]);

    // To get foreign key
    $email = $request->session()->get('email');
    // $id = User::where('email', $email)->select('id')->get();

    $game = new Game;
    
    $game->title = request('title');
    $game->publisher = request('publisher');
    $game->releasedate = request('releasedate');
    $game->image = request()->file('image')->store('public/images');
    $game->imagesrc = request('imagesrc');

    // This is for store file
    if ($request->hasFile('cover')) {
      $game['cover'] = $request->cover->getClientOriginalName();
      $request->cover->storeAs('files', $game['cover']);
    }
    $game->coursesrc = request('coursesrc');

    $game->user_id = auth()->id();
    $game->users_id = auth()->id();


    $game->save();

    session()->flash('message', 'Nice Submission!');
    session()->flash('type', 'success');
    
    return redirect('/games');
  }



  public function download($user_id)
  {
    $game = Game::where('user_id', $user_id)->firstOrFail();
    $pathToFile = storage_path('app/files/' . $game->cover);
    
    return response()->download($pathToFile);
  }

  // Fungsi delete()
  public function delete($id)
  {
    $game = Game::where('id', $id)->delete();
    return redirect('/games')->with('status', 'Course Berhasil Dihapus');
  }

  
  // FUNGSI EDIT()
  public function edit($id)
  {
    // $game = Game::findOrFail($id);
    
    // // return view('games.edit',['game' = $game]);
    // return view('games.edit',['game' => $game]);

    $game = Game::findOrFail($id);

    return view('games.edit', compact('game'));
  }

  public function update(Request $request, $id)
  {
    // $game = Game::find($id)->update($request->all()); 
          
    // return view('games.index')->with('success',' Course Updated Successfully');
    $validatedData = $request->validate([
      'title' => 'required|unique:games',
      'publisher' => 'required',
      'releasedate' => 'required',
      'image' => 'required',
      'imagesrc' => 'required',
      // 'cover' => 'required|mimes:txt',
      'cover' => 'required',
      'coursesrc' => 'required',
    ]);
    
    $game = Game::where('id', $id)->first();

    // dd($game);
    $game->title = request('title');
    $game->publisher = request('publisher');
    $game->releasedate = request('releasedate');
    $game->image = request()->file('image')->store('public/images');
    $game->imagesrc = request('imagesrc');

    // This is for store file
    if ($request->hasFile('cover')) {
      $game['cover'] = $request->cover->getClientOriginalName();
      $request->cover->storeAs('files', $game['cover']);
    }
    $game->coursesrc = request('coursesrc');

    $game->user_id = auth()->id();
    $game->users_id = auth()->id();
    

    $game->save();

    // Game::whereId($id)->update($game);

    return redirect('/games')->with('success', 'Course successfully updated');
    // return redirect()->route('games.show', $game->id)->with('success', 'Course successfully updated');
  }
  // , ['game' = $game]
  // DEVELOP NANTI UNTUK READ FILE
  // public function contents($id)
  // {
  //   $game = Game::where('id', $id)->firstOrFail();

  //   foreach(file('yourfile.txt') as $line) {
  //     // loop with $line for each line of yourfile.txt
  //   }

  //   // return dd($contents);
  //   return view('games.show');
  // }
  

}
