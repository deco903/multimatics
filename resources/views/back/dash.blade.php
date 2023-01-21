@extends('back.app')
@section('title','Dashboard Page')
@section('isi')

<div class="container-fluid bg-3 text-center" style="margin-left:200px;">
  <div class="row">
    <div class="col-sm-3">
      Materi 1
      <a href="{{url('materi1')}}"><img src="{{asset('gbr/instructor.jpeg')}}" class="img-responsive" style="width:100%;" alt="Image"></a>
    </div>
    <div class="col-sm-3">
      Materi 2
      <a href="{{url('materi2')}}"><img src="{{asset('gbr/instructor.jpeg')}}" class="img-responsive" style="width:100%;" alt="Image"></a>
    </div>
    <div class="col-sm-3">
      Materi 3
      <a href="{{url('materi3')}}"><img src="{{asset('gbr/instructor.jpeg')}}" class="img-responsive" style="width:100%;" alt="Image"></a>
    </div>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Some of my Work</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%;" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>IT training and Consultant</p>
      <img src="{{asset('gbr/mm.jpg')}}" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>
@endsection


