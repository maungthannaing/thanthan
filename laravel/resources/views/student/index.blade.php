@extends('layouts.app')
@section('title','Home Index')

@section('content')
    <div class="container p-3">
        <table>
            <tr>
                <th class="tit"><b>name</b></th>
                <th>photos</th>
                <th><b>age</b></th>
                <th><b>address</b></th>
                <th><b>father_name</b></th>
                <th>subject_id</th>
                <th>department_id</th>
                <th>att_id</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $key=> $student)
            <tr>
                <td class="p-3">{{$student->name}}</td>
                <td><img src="{{asset('image/'.$student->photos)}}" style="width:60px; height: 60px; border-radius: 50px;" alt="Photo"></td>
                <td class="p-3">{{$student->age}}</td>
                <td class="p-3">{{$student->address}}</td>
                <td class="p-3 fatt">{{$student->father_name}}</td>
                <td>{{$student->subject->subject_name}}</td>
                <td>{{$student->department->department_name}}</td>
                <td>{{$student->att->bio}}</td>
                <td class="p-3">
                <form action="{{ asset('students/'.$student->id)}}" method="POST">
                @csrf
                @method('DELETE')
                    <a href="">
                        <button type="button" class="btn btn-success"><i class="fa fa-edit"></i>edit</button>
                    </a>
                     
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i>delete</button>

                </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection