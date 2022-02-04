@extends('layouts.app')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div> 
      <center>  <img src="image/Logo.png" style="width:50%" class="d-block w-50" alt="First Slide">
      </div>
      <div class="carousel-item">
       <center> <img src="image/Steak.png" style="width:50%" class="d-block w-50" alt="Second Slide">
      </div>
      <div class="carousel-item">
       <center> <img src="image/Slice.png" style="width:50%" class="d-block w-50" alt="Third Slide">
      </div>
    </div>
</center>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
@endsection