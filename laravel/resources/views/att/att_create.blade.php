@extends('layouts.app')
@section('title','Home Index')

@section('content')
    <div class="container p-3">
         @if(session('success'))
            <div>
                <h4>အောင်မြင်စွာသိမ်းဆည်းပြီးပါပြီ</h4>
            </div>
        @endif

            <form method="POST" action="{{route('att_store')}}" enctype="multipart/form-data" class="container foom">
            @csrf

                <div>
                    <label class="form-group formm">Att_Name</label>
                    <input class="form-control" type="text" name="att_name" value="{{old('att_name')}}">
                    @error('att_name')
                        <p>{{$message}}</p>
                    @enderror
                </div>  
                 <div method="POST" action="{{route('att_store')}}" enctype="multipart/form-data">
                    <label class="form-group formm">Photos</label>
                    <input class="form-control" type="file" name="photos">
                    
                    @error('photos')
                        <p>{{$message}}</p>
                    @enderror
                </div>   
                <div>
                    <label class="form-group formm">Bio</label>
                    <input class="form-control" type="text" name="bio" value="{{old('bio')}}">
                    @error('bio')
                        <p>{{$message}}</p>
                    @enderror
                </div>    
                <div>
                    <button class="succ" type="submit">Save</button>
                </div>          
            </form>    
    </div>
@endsection