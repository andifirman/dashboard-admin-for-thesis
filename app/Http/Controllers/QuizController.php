<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


use App\Models\Quiz;
use App\Models\User;

use App\Models\Files;
use Webpatser\Uuid\Uuid;




class QuizController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth')->except(['index', 'show']);
  }

  public function index()
  {
    // $quizzes = Game::all();
    // return view('quizzes.index', ['quizzes' => $quizzes]);


    $quizzes = Quiz::latest()->get();
        
    $activeusers = User::activeusers();
  
    return view('quizzes.index', ['quizzes' => $quizzes, 'activeusers' => $activeusers]);
  }



  // INI YANG BENER
  public function show(Quiz $quiz)
  {
    $activeusers = User::activeusers();
        
    return view('quizzes.show', ['quiz' => $quiz, 'activeusers' => $activeusers]);

    // INI NIH BENER BUAT NGATASIN MASALAH NON-OBJECT
    // return view('quizzes.show', compact('game', 'activeusers'));
  }
    

  public function create()
  {
    return view('quizzes.create');
  }


  public function store(Request $request)
  {
    $this->validate(request(), [
      'title' => 'required|unique:quizzes',
      'publisher' => 'required',
      'releasedate' => 'required',
      'cover' => 'required|mimes:txt',
    ]);

      
    // Ini buat game (soon buat deskripsi course)
    $quiz = new Quiz;
    
    $quiz->title = request('title');
    $quiz->publisher = request('publisher');
    $quiz->releasedate = request('releasedate');

    // This is for store file
    if ($request->hasFile('cover')) {
      $quiz['cover'] = $request->cover->getClientOriginalName();
      $request->cover->storeAs('quiz', $quiz['cover']);
    }


    $quiz->user_id = auth()->id();
    $quiz->save();

    session()->flash('message', 'Nice Submission!');
    session()->flash('type', 'success');
    
    return redirect('/quizzes');
  }



  public function download($user_id)
  {
    $quiz = Quiz::where('user_id', $user_id)->firstOrFail();
    $pathToFile = storage_path('app/quiz/' . $quiz->cover);
    
    return response()->download($pathToFile);
  }

  // Fungsi delete()
  public function delete($id)
  {
    $quiz = Quiz::where('id', $id)->delete();
    // DB::table('students')->where('id_siswa', $id)->delete();
    // File::delete('data_file/'.$gambar->file);
    // Game::delete('app/files/'.$game->cover);

    // if(Game::exists(storage_path('app/files/' . $game->cover))){
    //   Game::delete(storage_path('app/files/' . $game->cover));
    // }else{
    //   dd('File does not exists.');
    // }


    return redirect('/quizzes')->with('status', 'Course Berhasil Dihapus');
    
    
  }

  


  // NANTI DEVELOP YA
  // FUNGSI EDIT()
  public function edit($id)
  {
    $quiz = Quiz::where('id', $id)->first();

    // $students = DB::table('students')->where('id_siswa', $id)->first();
    return view('quizzes.edit', compact('quiz'));
  }

  // public function update(Request $request)
  // {
  //   $this->validate($request, [
  //     'title' => 'required|unique:quizzes',
  //     'publisher' => 'required',
  //     'releasedate' => 'required',
  //     'image' => 'required',
  //     'cover' => 'required|mimes:txt',
  //   ]);

  //   DB::table('quizzes')->where('id', $request->id)->update([
  //     'title' => request('title'),
  //     'publisher' => request('publisher'),
  //     'releasedate' => request('releasedate'),
  //     'image' => request()->file('image')->store('public/images'),
  //   ]);

  //   // This is for store file
  //   if ($request->hasFile('cover')) {
  //     $quiz['cover'] = $request->cover->getClientOriginalName();
  //     $request->cover->storeAs('files', $quiz['cover']);
  //   }
    

  //   return redirect('/quizzes')->with('status', 'Data Course Berhasil Diubah');
  // }





  // DEVELOP NANTI UNTUK READ FILE
  public function contents($id)
  {
    $quiz = Quiz::where('id', $id)->firstOrFail();

    foreach(file('yourfile.txt') as $line) {
      // loop with $line for each line of yourfile.txt
    }


    // return dd($contents);
    return view('quizzes.show');
  }
}
