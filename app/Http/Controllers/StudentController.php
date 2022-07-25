<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  function index(){
    return view('students.index');
  }

  function save(Request $request){
    return $request->input();
  }
}
