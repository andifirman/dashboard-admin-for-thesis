<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// INI CONTROLLER UNTUK LOGIN
class SessionsController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest')->except('destroy');
  }

  public function create()
  {
    return view('sessions.create');
  }
    
  public function store()
  {
    // if (auth()->attempt(request(['email', 'password'])) == false) {
    //   return back()->withErrors([
    //     'message' => 'The email or password is incorrect, please try again'
    //   ]);
    // }

    if (auth()->attempt(request(['email', 'password'])) == false) {
      return back()->withErrors([
        'message' => 'The email or password is incorrect, please try again'
      ]);
    }else if(auth()->attempt(request(['email' == 'admin@mail.com', 'password' == 'qwerty12345'])) == true){
      session()->flash('message', '<b>Hello Admin</b>');
      session()->flash('type', 'success');
      
      return redirect()->to('/games');
    }else{
      session()->flash('message', '<b>Hello </b>'.auth()->user()->name);
      session()->flash('type', 'success');
      
      return redirect()->to('/games');
    }
  }
    
  public function destroy()
  {
    {
      auth()->logout();
      
      session()->flash('message', 'You are now <b>logged out</b>');
      session()->flash('type', 'info');
      
      // return redirect()->to('/games');
      return redirect()->to('/login');
    } 
  }
}
