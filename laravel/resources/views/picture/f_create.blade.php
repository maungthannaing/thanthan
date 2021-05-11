@extends('layouts.app')
<style>
.color{
    color:rgb(47, 19, 150);
}

</style>

@section('content')
<div class="container ">

@if (session('success'))
  <div class="text-center alert alert-success" role="alert">
    <h5>အောင်မြင်စွာ သင့်၏ postကို တင်ပြီးပါပြီ။</h5>
  </div>
 @endif

<form action="{{ route('store') }}" method="post"  enctype="multipart/form-data" class="p-4 mx-auto bg-success"  style="width:400px;border-radius:20px;">
    @csrf
 <div>
     <span>Gellory Image</span>
     <input type="file" name="photo">
 </div>
 <div>
     <input type="submit" value="Send Photo">
 </div>
</form>
</div>
@endsection