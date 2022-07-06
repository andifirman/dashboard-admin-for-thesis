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
      'cover' => 'required|mimes:txt',
    ]);

      
    // Ini buat game (soon buat deskripsi course)
    $game = new Game;
    
    $game->title = request('title');
    $game->publisher = request('publisher');
    $game->releasedate = request('releasedate');
    $game->image = request()->file('image')->store('public/images');

    // This is for store file
    if ($request->hasFile('cover')) {
      $game['cover'] = $request->cover->getClientOriginalName();
      $request->cover->storeAs('files', $game['cover']);
    }


    $game->user_id = auth()->id();
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
    // DB::table('students')->where('id_siswa', $id)->delete();
    // File::delete('data_file/'.$gambar->file);
    // Game::delete('app/files/'.$game->cover);

    // if(Game::exists(storage_path('app/files/' . $game->cover))){
    //   Game::delete(storage_path('app/files/' . $game->cover));
    // }else{
    //   dd('File does not exists.');
    // }


    return redirect('/games')->with('status', 'Course Berhasil Dihapus');
    
    
  }

  


  // NANTI DEVELOP YA
  // FUNGSI EDIT()
  public function edit($id)
  {
    $game = Game::where('id', $id)->first();

    // $students = DB::table('students')->where('id_siswa', $id)->first();
    return view('games.edit', compact('game'));
  }

  public function update(Request $request)
  {
    $this->validate($request, [
      'title' => 'required|unique:games',
      'publisher' => 'required',
      'releasedate' => 'required',
      'image' => 'required',
      'cover' => 'required|mimes:txt',
    ]);

    DB::table('games')->where('id', $request->id)->update([
      'title' => request('title'),
      'publisher' => request('publisher'),
      'releasedate' => request('releasedate'),
      'image' => request()->file('image')->store('public/images'),
    ]);

    // This is for store file
    if ($request->hasFile('cover')) {
      $game['cover'] = $request->cover->getClientOriginalName();
      $request->cover->storeAs('files', $game['cover']);
    }
    

    return redirect('/games')->with('status', 'Data Course Berhasil Diubah');
  }





  // DEVELOP NANTI UNTUK READ FILE
  public function contents($id)
  {
    $game = Game::where('id', $id)->firstOrFail();

    foreach(file('yourfile.txt') as $line) {
      // loop with $line for each line of yourfile.txt
    }


    // return dd($contents);
    return view('games.show');
  }
  

}
