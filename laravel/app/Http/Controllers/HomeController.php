<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Department;
use App\Models\Upload;
use App\Models\Att;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $students=Student::all();
        // $students=Student::orderby('id','DESC')->paginate('2');
        $students=Student::orderby('id','ASC')->paginate('1');
        $subjects=Subject::orderby('id','ASC')->paginate('3');
        $departments=Department::orderby('id','DESC')->paginate('4');
        $atts=Att::orderby('id','DESC')->paginate('4');
        // $myusers=Myuser::limit(1)->get();
        return view('home',compact('students','subjects','departments','atts'));
        return view('home');
    }
}
