<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Chart;
use App\Models\Student;

class ChartsController extends Controller
{
  public function index()
  {
    // $students = \App\Models\Student::all();
    // return view('charts.index',compact('students'));

    // $user_info = DB::table('usermetas')
    //              ->select('browser', DB::raw('count(*) as total'))
    //              ->groupBy('browser')
    //              ->get();

    $students = DB::table('students')
                ->select('stu_score', DB::raw('count(stu_score)'))
                ->groupBy('stu_score')
                ->get();
    
    return view('charts.index',compact('students')); 
  }

  public function showing(Request $request)
  {
    $one = Student::where('stu_score', 1)->get();
    $two = Student::where('stu_score', 2)->get();
    $three = Student::where('stu_score', 3)->get();
    $four = Student::where('stu_score', 4)->get();
    $five = Student::where('stu_score', 5)->get();
    $six = Student::where('stu_score', 6)->get();
    $seven = Student::where('stu_score', 7)->get();
    $eight = Student::where('stu_score', 8)->get();
    $nine = Student::where('stu_score', 9)->get();
    $ten = Student::where('stu_score', 10)->get();


    $one_count = count($one);
    $two_count = count($two);
    $three_count = count($three);
    $four_count = count($four);
    $five_count = count($five);
    $six_count = count($six);
    $seven_count = count($seven);
    $eight_count = count($eight);
    $nine_count = count($nine);
    $ten_count = count($ten);

    return view('charts.show',
           compact(
            'one_count',
            'two_count',
            'three_count',
            'four_count',
            'five_count',
            'six_count',
            'seven_count',
            'eight_count',
            'nine_count',
            'ten_count')
          );
  }
}
