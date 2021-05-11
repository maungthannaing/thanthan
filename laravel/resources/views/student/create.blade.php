@extends('layouts.app')
@section('title','Create Post')
@section('content')
<div>
    <style>
        div{
            padding:10px;
        }
        p{
            color:red;
        }
        h3{
            color:green;
        }
        h1{
            color:green;
        }
        input{
            width:20%;
        }
        .container{
            /* background-color:gainsboro; */
            max-width:500px;
            border-radius:30px;
        }
        label{
            color: #252525;
        }
        
    </style>
    <div class="container"> 
        <div>
            <h1>Student Post</h1>
        </div> 
        @if(session('success'))
        <div>
            <h3>Data insert successfully</h3>
        </div>
        @endif
    <form method="POST" action="{{route('t_store')}}" enctype="multipart/form-data">
        @csrf
           
        <div>
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{old('name')}}">
            @error('name')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <label>Age</label>
            <input type="text" name="age" class="form-control" placeholder="Enter your age" value="{{old('age')}}">
            @error('age')
            <p>{{$message}}</p>
            @enderror
        </div>

        <div method="POST" action="{{route('t_store')}}" enctype="multipart/form-data">
            <label>Photos</label>
            <input type="file" name="photos"  class="form-control" value="{{old('photos')}}">
            @error('photos')
            <p>{{$message}}</p>
             @enderror
        </div>

        <div>
            <label>Father_Name</label>
            <input type="text" name="father_name" class="form-control" placeholder="Enter your father name" value="{{old('father_name')}}">
            @error('father_name')
            <p>{{$message}}</p>
            @enderror
        </div>
       <br>
        <div>
        <label>Department</label>
            <select class="form-control" type="text" name="department_id">
                @foreach($departments as $department)
                    <option value="{{$department->id}}" {{$department->id==old('department_id')?'selected':null}}>
                {{$department->department_name}}
                @endforeach
            </select>
        </div>
        <br>
        <div>
        <label>Att</label>
            <select class="form-control" name="att_id">
                @foreach($atts as $att)
                    <option value="{{$att->id}}" {{$att->id==old('att_id')?'selected':null}} >
                {{$att->att_name}}
                @endforeach
            </select>
    </div>
    <br>
     <div>
        <label>Subject</label>
            <select class="form-control" type="text" name="subject_id">
                @foreach($subjects as $subject)
                    <option value="{{$subject->id}}" {{$subject->id==old('subject_id')?'selected':null}}>
                {{$subject->subject_name}}
                @endforeach
            </select>
        </div>
        <div>
            <label>Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter your Address" value="{{old('address')}}">
            @error('address')
            <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <button class="btn btn-danger" type="submit">Save</button>
        </div>

        </div>
    </form>
</div>

@endsection
