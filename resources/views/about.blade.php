@extends('layouts.master')
@section('content')
<div class="banner-section mt-3">
    <div class="container">
        <div class="banner-title">
            <h1 class="fs-1 w-5">Join With us and <br> explore the World</h1>
            <p class="fs-3 w-2">Escape the everyday</p>
            <div class="input-fill d-flex mt-2">
                <input type="text" placeholder="select in the code">
                <img class="img" src="{{ asset('/') }}icon/Frame 2.png" alt="">
            </div>
        </div>
    </div>
  </div>
<!-- this is banner section end  -->
<!-- this is time section start  -->
  <div class="mean-time">
    <div class="container">
        <div class="time d-flex">
            <div class="time-right">
                <h2 class="fs-2 w-2 color-2 mt-5">Come with us to our <br>
                    next adventure.</h2>
                   <button class="highlight mt-1">Join now</button>
            </div>
            <div class="time-left mt-6">
                <h3 id="heading" class="fs-3 w-2"> <span class="white">We are getting</span> ready.</h3>
                <div class="secend d-flex fs-3 w-2">
                    <h1>05</h1>
                    <h1>12</h1>
                    <h1>50</h1>
                </div>
                <div class="day d-flex fs-3 white">
                    <h3 class="w-2">Day</h3>
                    <h3 class="w-2">Hour</h3>
                    <h3 class="w-2">Minute</h3>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- this is amazon section start  -->

  <!-- our populer section end  -->
  <!-- our testimoniel section start  -->
  <div class="testimonial-section mt-4">
    <h3 class="center w-2 fs-3 mt-2 ittlic">Testimonial</h3>
    <h1 class="center fs-1 w-5 mt-2">What people says</h1>
    <div class="testimonial mt-3">
        <div class="container">
            <div class="textimonial-img d-flex">
                <div class="text-img mt-3">
                    <img src="{{ asset('/') }}logo/man's face in a circle.png" alt="">
                </div>
                <div class="text-datels mt-5">
                    <h2 class="fs-2 w-3">Justin Mofiz</h2>
                    <h3 class="fs-3 w-3">Tour partner</h3>
                </div>
            </div>
            <div class="testimonial-text color-1 w-2 fs-4 center mt-2">
                <h4>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo’’</h4>
            </div>
        </div>
    </div>
  </div>
  <!-- our testimonial section end -->
  <!-- our luxurious car section start  -->
  <div class="container">
    <div class="trip d-flex">
        <div class="trip-img">
            <img src="{{ asset('/') }}banner-image/travels-car.png" alt="">
        </div>
        <div class="trip-title">
            <h2 class="w-2 fs-2 mt-6">Luxurious Travel Car</h2>
            <h5 class="w-2 fs-5 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</h5>
        </div>
      </div>
  </div>
  <!-- our luxurious section end  -->
  <!-- our export section start  -->
  <div class="container">
    <div class="trip d-flex">
        <div class="trip-title">
            <h2 class="w-2 fs-2 mt-6">Expert Travel Guide</h2>
            <h5 class="w-2 fs-5 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard

                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</h5>
        </div>
        <div class="trip-img">
            <img src="{{ asset('/') }}banner-image/travel-group.png" alt="">
        </div>
      </div>
  </div>
  <!-- our export section end  -->
  <!-- our safe travel section start  -->
  <div class="container">
    <div class="trip d-flex">
        <div class="trip-img">
            <img src="{{ asset('/') }}banner-image/boy.png" alt="">
        </div>
        <div class="trip-title">
            <h2 class="w-2 fs-2 mt-6">Safe & Secure Travel</h2>
            <h5 class="w-2 fs-5 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard

                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</h5>
        </div>
      </div>
  </div>
  <!-- our safe travel section end  -->
  <!-- our luxurious Hotel section start  -->
  <div class="container">
    <div class="trip d-flex">
        <div class="trip-title">
            <h2 class="w-2 fs-2 mt-6">Luxurious Hotel</h2>
            <h5  class="w-2 fs-5 mt-2">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard

                McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.</h5>
        </div>
        <div class="trip-img">
            <img src="{{ asset('/') }}banner-image/girls.png" alt="">
        </div>
      </div>
  </div>
  <!-- our luxurious hotel section end  -->
  <!-- our registion section start  -->

@endsection
