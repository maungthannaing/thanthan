@extends('layouts.app')
@section('title','Home Index')

@section('content')


<div class="container-fluid">
                    <div class="container">
                    <div class="mb-3">
                        @foreach ($departments as $key=> $department)
                            <div class="row g-0 pt-2">
                                <div class="col-lg-6 col-md-6">
                                <img src="{{asset('image/'.$department->photos)}}" style="width: 100%; height: 300px;" alt="img-thumbnail">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                <div class="card-body">
                                    <h2 class="card-title"><b>{{$department->department_name}}</b></h2>
                                    <h3 class="card-text">{{$department->bio}}</h3>
                                    {{-- <div class="read-more pt-4">
                                        <a href="#" class="btn btn-warning btn-sm"><h5><b>Read more</b></h5></a>
                                    </div> --}}
                                </div>
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>

    {{-- footer --}}
                    {{-- <div class="container bg-info p-2 text-center">
                        <h5><b>Copying @media</b></h5>
                    </div> --}}
                    {{-- footer --}}

</div>

@endsection