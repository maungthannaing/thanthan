@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card pt-2 pb-2">
                {{-- second div --}} 
                @foreach ($students as $student)
                    <div class="row equal pb-2">
                            <div class="col-lg-3 col-md-6 ">
                                <div class="card blog-card">
                                    <div class="item">
                                        <img src="{{asset('image/'.$student->photos)}}" class="card card-pic" style="width:100%; height:200px;" alt="img-thumbnail">
                                    </div>
                                    <div clsass="">
                                        <h3><b>{{$student->department->department_name}}</b></h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><i>{{$student->att->bio}}</i></p>
                                    </div>
                                    <div class="read-more pl-3 pb-2">
                                        <a href="#" class="btn btn-outline-dark btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>

                             <div class="col-lg-3 col-md-6 ">
                                <div class="card blog-card">
                                    <div class="item">
                                        <img src="{{asset('image/'.$student->department->photos)}}" class="card card-pic" style="width:100%; height:200px;" alt="img-thumbnail">
                                    </div>
                                    <div clsass="">
                                       <h3><b>{{$student->att->att_name}}</b></h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><i>{{$student->subject->bio}}</i></p>
                                    </div>
                                    <div class="read-more pl-3 pb-2">
                                        <a href="#" class="btn btn-outline-dark  btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 ">
                                <div class="card blog-card">
                                    <div class="item">
                                        <img src="{{asset('image/'.$student->att->photos)}}" class="card card-pic" style="width:100%; height:200px;" alt="img-thumbnail">
                                    </div>
                                    <div clsass="">
                                        <h3><b>{{$student->subject->subject_name}}</b></h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><i>{{$student->att->bio}}</i></p>
                                    </div>
                                    <div class="read-more pl-3 pb-2">
                                        <a href="#" class="btn btn-outline-dark  btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 ">
                                <div class="card blog-card">
                                    <div class="item">
                                        <img src="{{asset('image/'.$student->subject->photos)}}" class="card card-pic" style="width:100%; height:200px;" alt="img-thumbnail">
                                    </div>
                                    <div clsass="">
                                        <h3><b>{{$student->name}}</b></h3>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><i>{{$student->att->bio}}</i></p>
                                    </div>
                                    <div class="read-more pl-3 pb-2">
                                        <a href="#" class="btn btn-outline-dark  btn-sm">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
                    {{-- second div --}}

                    {{-- third --}}
                        <div class="container pic" style=" background-image: url('{{asset('image/1619083455.jpg')}}'); height: 400px; background-size: cover;">
                            {{-- <img src="{{asset('image/1616398555_lip2.jpg')}} " class=" picture" alt="img-thumbnail"> --}}
                        </div>
                    {{-- third --}}

                    {{-- third --}}
                        <div>
                            <div class="row pt-2">
                                <div class="container p-2">
                                    <h1><b>LATEST SUBJECTS</b></h1>
                                </div>
                                @foreach ($subjects as $subject)
                                    <div class="col-lg-4">
                                            <div class="row harticle-row">    
                                                <div class="col-sm-5">
                                                
                                                    <div class="homearticle">
                                                    <p><img src="{{asset('image/'.$subject->photos)}}" class="card" style="width:100%; height:250px;" alt="img-thumbnail"></p>
                                                    </div>
                                                </div>
                                            
                                                
                                                    <div class="col-sm-7">
                                                        <div class="homearticle-title">
                                                        <h4 class="article-title">သူပုန်</h4>
                                                        <p class="article-des">“သူပုန်" ဆိုရေ စာအုပ်ထွက်အောင်လုပ်နီစွာ အင်တန်ချေ ကြာပါရာ။ စာပီဝါသနာရှင်တိကို "ပင်တိုင်"ထားပနာ လုပ်နီကတ်စွာ။ တိုက်ပွဲနန့်ကိုဗစ်က သူပုန့် . . .</p>
                                                        <p style="color: #911B1B;">Article <i class="far fa-clock"></i> 03-Oct-2020</p>
                                                        <div class="read-more">
                                                        <a href="https://drnyotwanawng.com/post/7a9f492b-a408-46ba-979e-99962a51ade4" class="btn btn-danger btn-sm">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                @endforeach
                            </div>                        
                        </div>
                    {{-- third --}}

                    {{-- four div --}}
                    {{-- <div class="container p-2">
                    <div class="container">
                        <h1><b>LATEST ARTICLES</b></h1>
                    </div>
                    <div class="row p-2">
                    @foreach ($subjects as $subject)

                      <div class="col-lg-3 col-md-6 ">
                            <p><img src="{{asset('image/'.$subject->photos)}}" class="card" style="width:100%; height:250px;" alt="img-thumbnail"></p>
                            <h3><b>{{$subject->subject_name}}</b></h3>
                            <i>{{$subject->bio}}</i>
                            
                        </div>      
                     @endforeach

                    </div> --}}
                    {{-- four div --}}

                    {{-- five div --}}
                    <div class="container p-2">
                    <div class="container">
                        <h1><b>LATEST DEPARTMENTS</b></h1>
                    </div>
                    <div class="row p-2">
                    @foreach ($departments as $department)

                      <div class="col-lg-3 col-md-6 ">
                            <p><img src="{{asset('image/'.$department->photos)}}" class="card" style="width:100%; height:250px;" alt="img-thumbnail"></p>
                            {{-- <h1>{{$post->title}}</h1> --}}
                            {{-- <p>{{$post->description}}</p> --}}
                            <h3><b>{{$department->department_name}}</b></h3>
                                <i>{{$department->bio}}</i>
                        </div>

                            
                     @endforeach
                    </div>
                    {{-- five div --}}
            </div>
</div>
@endsection
