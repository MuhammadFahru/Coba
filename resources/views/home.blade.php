@extends('layouts.master')
@section('title','Runaway Official Website')
@section('home','active')
@section('id', 'page-top')
@section('content')
<center>
<div class="bg">
  <div class="landing-page">
    <div class="row">
      <div class="col-6" data-aos="fade-up">
      <h2 class="mt-10">Runaway</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo cupiditate voluptate nesciunt necessitatibus consectetur nemo a quos quisquam ipsa alias unde pariatur doloremque qui ea, exercitationem, maxime eveniet error?</p>      
      </div>
      <div class="col-6" data-aos="fade-right"><br><br><br>
        <img src="/img/Revisi logo.png" class="mt-5" width="90%" alt="">
      </div>
    </div>
  </div>
</div>  
  <br><br><br><br><br><br>
  <div class="container">
  <div class="row"></div>
    <div class="item lima hideme top" style="z-index:1; opacity:1; top:0px;" id="daftar">
        <div class="box-biru lima">
            <h1>Let's Play And Enjoy </h1>
            <div>
                <button class="btn btn-default btn-daftar pt-2">
                <a href="{{ URL::asset('/img/singel_logo.png') }}" class="noblue" download>
                  <h5>Download <i class="fas fa-arrow-down"></i></h5>
                </a>
                </button>
            </div>
        </div>
    </div>    
  </div>  
  </div>
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
</center>  
@endsection