<?php

use Illuminate\Support\Facades\Route;
use App\Models\Game;


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

Route::get('/', function (){
  return view('welcome');
});



// Games routes
// Route::get('games', function(){
//   $games = Game::all();
  
//   return view('games.index', ['games' => $games]);
// });

// Route::get('games/{id}', function ($id) {
//   $game = Game::find($id);
  
//   return view('games.show', ['game' => $game]);
// }); 


//-- Games Resource --//
Route::get('/games', 'App\Http\Controllers\GamesController@index');
Route::get('/games/create', 'App\Http\Controllers\GamesController@create');
Route::post('/games', 'App\Http\Controllers\GamesController@store');
Route::get('/games/{game}', 'App\Http\Controllers\GamesController@show');

//-- Files Download Routes --//
Route::get('/games/{user_id}/download', 'App\Http\Controllers\GamesController@download')->name('games.download');
// Route::get('/games/contents', 'App\Http\Controllers\GamesController@contents');

//-- Read Files to View Routes --//
// Route::get('/games/content', 'App\Http\Controllers\GamesController@content')->name('games.content');


//-- Reviews Resource --//
Route::get('/reviews', 'App\Http\Controllers\ReviewsController@index');
Route::get('/reviews/{game}/create', 'App\Http\Controllers\ReviewsController@create');
Route::post('/games/{game}/reviews', 'App\Http\Controllers\ReviewsController@store');
Route::get('/reviews/{review}', 'App\Http\Controllers\ReviewsController@show');


//-- User Authentication and Session --//
Route::get('/register', 'App\Http\Controllers\RegistrationController@create');
Route::post('/register', 'App\Http\Controllers\RegistrationController@store');

Route::get('/login', 'App\Http\Controllers\SessionsController@create')->name('login');
Route::post('/login', 'App\Http\Controllers\SessionsController@store');
Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');


// Route::resource('/files', FilesController::class);
// Route::resource('/files', 'App\Http\Controllers\FilesController');
// Route::get('/files/{uuid}/download', [FilesController::class, 'download'])->name('files.download');
// Route::get('/games/{user_id}/download', 'App\Http\Controllers\FilesController@download')->name('files.download');