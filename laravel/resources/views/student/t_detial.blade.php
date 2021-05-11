@extends('layouts.app')
@section('title','Home Index')

@section('content')
    <div class="container-fluid">
        <div class="container p-3">
            <table>
                <tr>
                    <th class="p-5"" style="border:solid 1px white;"><h4>Name</h4></th>
                    <th style="border:1px solid white;" class="p-2"><h4>Photo</h4></th>
                    <th style="border:1px solid white;" class="p-1"><b><h4>Age</h4></b></th>
                    <th style="border:1px solid white;" class="p-5"><b><h4>address</h4></b></th>
                    <th style="border:1px solid white;" class="p-5"><b><h4>father_name</h4></b></th>
                    <th style="border:1px solid white;" class="p-5"><h4>department_id</h4></th>
                    <th style="border:1px solid white;" class="p-5"><h4>subject_id</h4></th>
                    <th style="border:1px solid white;" class="p-5"><h4>att_id</h4></th>
                    <th style="border:1px solid white;" class="p-2"><h4>Action</h4></th>
                </tr>
                @foreach ($students as $key=> $student)
                <tr>
                    <td class="p-3 text-center">{{$student->name}}</td>
                    <td><img src="{{asset('image/'.$student->photos)}}" style="width:80px; height: 80px; border-radius: 50px;" alt="Photo"></td>
                    <td class="p-3 text-center">{{$student->age}}</td>
                    <td class="p-3">{{$student->address}}</td>
                    <td class="p-3 fatt text-center">{{$student->father_name}}</td>
                    <td class="text-center">{{$student->department->department_name}}</td>
                    <td class="text-center">{{$student->subject->subject_name}}</td>
                    <td class="text-center">{{$student->att->att_name}}</td>
                    <td class="p-3">
                    <form action="{{asset('image/'.$student->photos)}}" method="POST">
                    @csrf
                    @method('DELETE')
                        <a href="{{route('t_edit',$student->id)}}">
                            <button type="button" class="btn btn-success">edit</button>
                        </a>
                        {{-- <a href="">
                            <button type="button" class="btn btn-info">Show</button>
                        </a> --}}
                        <a href="{{route('t_delete',$student->id)}}">
                            <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                        </a>
                    </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection