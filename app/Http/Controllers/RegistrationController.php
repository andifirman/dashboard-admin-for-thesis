<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App;

class RegistrationController extends Controller{

  public function __construct()
  {
    $this->middleware('guest');
  }

  public function create(){
    return view('registration.create');
  }

  public function store(){
    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed'
    ]);
    
    $user = User::create(request(['name', 'email', 'password']));
    
    auth()->login($user);
    
    session()->flash('message', '<b> Hi There! </b> Thanks for signing up!');
    session()->flash('type', 'success');
    
    return redirect()->to('/games');
  }

}
