<?php

use Illuminate\Support\Facades\Route;
use App\Models\Game;

// Library for random id generator
use Haruncpi\LaravelIdGenerator\IdGenerator;

use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// THIS IS FOR GENERATE A RANDOM ID
Route::get('/', function (){
  return view('welcome');

  // Generate random ID (actually it is for NIS (nomor induk siswa))
  // $config = ['table'=>'students','length'=>10, 'prefix'=>'18'];
  // $i = 0;
  // for($i=0; $i<=9; $i++){
  //   $id = IdGenerator::generate($config);
  //   return $id;
  // }
  
  // $id = IdGenerator::generate($config);
  
  // \DB::table('students')->insert(['user_id'=>$id]);

  // return $id;
});

// Symbolic link for hosting
Route::get('/foo', function () {
  Artisan::call('storage:link');
});


//-- Course Resource --//
Route::get('/games', 'App\Http\Controllers\GamesController@index');
Route::get('/games/create', 'App\Http\Controllers\GamesController@create');
Route::post('/games', 'App\Http\Controllers\GamesController@store');
Route::get('/games/{game}', 'App\Http\Controllers\GamesController@show');
Route::get('/games/delete/{id}', 'App\Http\Controllers\GamesController@delete');
Route::get('/games/edit/{id}', 'App\Http\Controllers\GamesController@edit');
Route::post('/games/update', 'App\Http\Controllers\GamesController@update');

//-- Course Files Download Routes --//
Route::get('/games/{user_id}/download', 'App\Http\Controllers\GamesController@download')->name('games.download');



//-- Quiz Resource --//
Route::get('/quizzes', 'App\Http\Controllers\QuizController@index');
Route::get('/quizzes/create', 'App\Http\Controllers\QuizController@create');
Route::post('/quizzes', 'App\Http\Controllers\QuizController@store');
Route::get('/quizzes/{quiz}', 'App\Http\Controllers\QuizController@show');
Route::get('/quizzes/delete/{id}', 'App\Http\Controllers\QuizController@delete');
Route::get('/quizzes/edit/{id}', 'App\Http\Controllers\QuizController@edit');
Route::post('/quizzes/update', 'App\Http\Controllers\QuizController@update');

//-- Quiz Files Download Routes --//
Route::get('/quizzes/{user_id}/download', 'App\Http\Controllers\QuizController@download')->name('quizzes.download');




//-- Reviews Resource --//
Route::get('/reviews', 'App\Http\Controllers\ReviewsController@index');
Route::get('/reviews/{game}/create', 'App\Http\Controllers\ReviewsController@create');
Route::post('/games/{game}/reviews', 'App\Http\Controllers\ReviewsController@store');
Route::post('/quiz/{game}/reviews', 'App\Http\Controllers\ReviewsController@store');
Route::get('/reviews/{review}', 'App\Http\Controllers\ReviewsController@show');


//-- User Authentication and Session --//
Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

Route::get('/login', 'App\Http\Controllers\SessionsController@create')->name('login');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');

// Students Route
Route::get('/students/create', 'App\Http\Controllers\StudentController@index');
Route::post('/students/save', 'App\Http\Controllers\StudentController@save')->name('student.save');