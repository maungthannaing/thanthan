<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;
// use App\Models\Student;
// use App\Models\Subject;
// use App\Models\Att;
// use App\Models\Department;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads= Upload::all();
        // $posts= Post::all();
        // $things= Thing::all();
        // $myusers= Myuser::all();
        return view('picture.index', compact('uploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create function
        return view('picture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //store create
        $imageName = time() . '.' . $request->photo->extension();



        $request->photo->move(public_path('image'), $imageName);

        $obj = new Upload;

        $obj->photos = $imageName;
        

        $obj->save();
        return redirect()->back()->with('success', 'အောင်မြင်စွာသိမ်းဆည်းပြီးပါပြီ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
