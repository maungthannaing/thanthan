<?php

namespace App\Http\Controllers;
use App\Models\Att;
use Illuminate\Http\Request;

class AttController extends Controller
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
        $atts=att::all();
        //dd($departments);
       return view('att.att_index' , compact('atts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('att.att_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'att_name'=>'required |string|min:5|max:100',
            'photos'=>'required|mimes:jpeg,jpg,png|max:2048',
            'bio'=>'required |string|min:5|max:400',
        ]);
        $att_name=$request->att_name;
        $file=$request->file("photos");
        $upload=time().'_'.$file->getClientOriginalName();
        $file->move(public_path('image'),$upload);
        $bio=$request->bio;
        //obj 
        $obj=new Att;
        $obj->att_name=$att_name;
        $obj->photos=$upload;
        $obj->bio=$bio;
        $obj->save();
        return redirect()->back()->with('success','အောင်မြင်စွာသိမ်းဆည်းပြီးပါပြီ');
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
