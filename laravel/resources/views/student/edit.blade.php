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
        @if (session('success'))
        <h2>Data edit successfully</h2>
        @endif

    <form method="POST" action="{{route('t_update', $students->id)}}" enctype='multipart/form-data'>
        @csrf 
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{$students->name}}">
            @error('name')
            <p>{{$message}}</p>
            @enderror
        </div>
         <div method="POST" action="{{route('t_store')}}" enctype='multipart/form-data'>
            <label>Photo</label>
            <input type="file" name="photos" value="{{$students->photos}}">
            <img style= "width:100px;" src="{{asset('image/'.$students->photos)}}" >
            @error('photos')
            <p>{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Age</label>
            <input type="text" name="age" class="form-control" value="{{$students->age}}">
            @error('age')
            <p>{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{$students->address}}">
            @error('address')
            <p>{{$message}}</p>
            @enderror
        </div>
        <br>
        <div>
            <label>Fathername</label>
            <input type="text" name="father_name" value="{{$students->father_name}}">
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
            <select class="form-control" type="text" name="att_id">
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
                    <option value="{{$subject->id}}" {{$subject->id==old('subject')?'selected':null}}>
                {{$subject->subject_name}}
                @endforeach
            </select>
        </div>
        <br>
        <div>
            <a href="{{route('t_create',$students->id)}}">
            <input type="submit" value="Post" style="background-color:green;">
            </a>
        </div>
    </div>
    </form>
</div>
@endsection
