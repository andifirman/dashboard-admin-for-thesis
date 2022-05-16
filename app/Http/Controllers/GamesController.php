<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


use App\Models\Game;
use App\Models\User;

use App\Models\Files;
use Webpatser\Uuid\Uuid;


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
      'cover' => 'required|mimes:txt',
    ]);

      
    // Ini buat game (soon buat deskripsi course)
    $game = new Game;
    
    // $game = $request->all();

    // $game['uuid'] = (string)Uuid::generate();
    // $game->uuid = request('uuid');

    $game->title = request('title');
    $game->publisher = request('publisher');
    $game->releasedate = request('releasedate');
    $game->image = request()->file('image')->store('public/images');

    // This is for store file
    if ($request->hasFile('cover')) {
      $game['cover'] = $request->cover->getClientOriginalName();
      $request->cover->storeAs('files', $game['cover']);
    }

    
    // And this is for store image (but it is a dummy code)
    // if ($request->hasFile('image')) {
    //   $game['image'] = $request->image->getClientOriginalName();
    //   $request->cover->storeAs('image', $game['image']);
    // }

    $game->user_id = auth()->id();
    $game->save();
    

    // Ini buat files
    // $file = $request->all();
    // $file['uuid'] = (string)Uuid::generate();

    
    // $game['uuid'] = (string)Uuid::generate();

    // Files::create($file);
    // Games::create($game);



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


  // public function content(Request $request)
  // {
  //     // Building directory path.
  //     $directory = storage_path('app/files');
      
  //     // Will return an array of files in the directory
  //     // Each array element is Symfony\Component\Finder\SplFileInfo object
  //     $files = Illuminate\Support\Facades\File::allFiles($directory);
      
  //     foreach ($files as $file) {
  //         $contents = $file->getContents();
  //     }
  // }

}
