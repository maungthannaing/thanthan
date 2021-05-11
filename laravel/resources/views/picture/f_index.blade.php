@extends('layouts.app')
@section('title','Index Page')
@section('content')
    {{-- body --}}
    <div class="container">
                        <div>
                            <h3>Uploads Photos</h3>
                       </div> 
                <div class="row">
                       
                    @foreach($uploads as $upload )

                    <div class="col-sm-2 col-md-2">
                        
                            <img  src="{{asset('image/'. $upload->photos)}}" style="width:300px;height:200px;" class="img-thumbnail">
                                                  
                        </div>          

                @endforeach

                    </div><hr>
                        
            <a href="{{ url('/f_create') }}">Add Images</a>
    </div>
@endsection