<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use App\Models\Att;
use App\Models\Student;
use App\Models\Department;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //construct 
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();

        // dd(students);
        return view('student.t_detial', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function t_create()
    {
        $students=Student::all();
        $subjects=Subject::all();
        $departments=Department::all();
        $atts=Att::all();
        return view('student.create',compact('subjects','departments','atts','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function t_store(Request $request)
    {
        $request->validate([
            'name'=>'required |string| min:5|max:100|',
            'photos'=>'required|mimes:jpeg,jpg,png|max:2048',
            'age'=>'required |string| min:1|max:10|',
            'address'=>'required |string| min:5|max:300|',
            'father_name'=>'required |string| min:5|max:300|',
            
            
        ]);
        $name=$request->name;
        $file=$request->file("photos");
        $upload=time().'_'.$file->getClientOriginalName();
        $file->move(public_path('image'),$upload);
        $age=$request->age;
        $address=$request->address;
        $father_name=$request->father_name;
        $subject=$request->subject_id;
        $department=$request->department_id;
        $att=$request->att_id;


        //obj 
        $obj=new Student;
        $obj->name=$name;   
        $obj->photos=$upload;   
        $obj->age=$age;        
        $obj->address=$address;        
        $obj->father_name=$father_name;        
        $obj->subject_id=$subject;
        $obj->department_id=$department;
        $obj->att_id=$att;
        $obj->save();
        return redirect()->back()->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students=Student::all();
        
        $departments=Department::all();
        $subjects=Subject::all();
        $atts=Att::all();
        return view('Student.t_detial', compact('departments','subjects','atts','students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function t_edit($id)
    {
        $students=Student::findOrFail($id);
        $departments=Department::all();
        $subjects=Subject::all();
        $atts=Att::all();
        return view('Student.edit', compact('departments','subjects','atts','students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function t_update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required |string| min:5|max:100|',
            'photos'=>'required|mimes:jpeg,jpg,png|max:2048',
            'age'=>'required |string| min:1|max:10|',
            'address'=>'required |string| min:5|max:300|',
            'father_name'=>'required |string| min:5|max:300|',
            
            
        ]);
        $name=$request->name;
        $file=$request->file("photos");
        $upload=time().'_'.$file->getClientOriginalName();
        $file->move(public_path('image'),$upload);
        $age=$request->age;
        $address=$request->address;
        $father_name=$request->father_name;
        $subject=$request->subject_id;
        $department=$request->department_id;
        $att=$request->att_id;


        //obj 
        $students= Student::find($id);
        $students->name=$name;   
        $students->photos=$upload;   
        $students->age=$age;        
        $students->address=$address;        
        $students->father_name=$father_name;        
        $students->subject_id=$subject;
        $students->department_id=$department;
        $students->att_id=$att;
        $students->save();
        return redirect()->back()->with('success','Data inserted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function t_destroy($id)
    {
        // dd($students);
        Student::where('id', $id)->delete();
        return redirect()->back()->with('success','Data delete successfully!');
    }
}
