
@extends('layouts.master');
@section('content')
<div class="amazon-section">
    <div class="container">
         <div class="amazon-title">
            <h3 class="center w-2 fs-3 mt-3 ittlic">Amazing</h3>
            <h1 class="center fs-1 w-5 mt-2">Popular Places</h1>
           <div class="amazon-img d-flex mt-3">
            <div class="image-1">
                <img src="{{ asset('/') }}background/1.png" alt="">
            </div>
            <div class="image-1">
                <img src="{{ asset('/') }}background/2.png" alt="">
            </div>
            <div class="image-1">
                <img src="{{ asset('/') }}background/3.png" alt="">
            </div>
           </div>
           <div class="amazon-img d-flex">
            <div class="image-1">
                <img src="{{ asset('/') }}background/1.png" alt="">
            </div>
            <div class="image-1">
                <img src="{{ asset('/') }}background/2.png" alt="">
            </div>
            <div class="image-1">
                <img src="{{ asset('/') }}background/3.png" alt="">
            </div>
           </div>
         </div>
    </div>
  </div>
  <!-- our trip section start  -->
  <div class="our-trip-section">
    <div class="container">
        <h3 class="center w-2 fs-3 mt-3 ittlic">Exclusive places</h3>
        <h1 class="center fs-1 w-5 mt-2">Popular Packages</h1>
      <div class="trip d-flex mt-2">
        <div class="trip-img">
            <img src="{{ asset('/') }}banner-image/trabels.png" alt="">
        </div>
        <div class="trip-title">
            <h2 class="w-2 fs-2">Next trip in Cox’s Bazar</h2>
            <h5 class="w-2 fs-5 mt-1">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.
                <br>
                making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more</h5>
                <button class="highlight mt-1">Join now</button>
        </div>
      </div>
    </div>
  </div>
  <!-- our trip section end  -->
  <!-- our populer section start  -->
  <div class="populer-packges-section">
    <div class="container">
        <h3 class="center w-2 fs-3 mt-3 ittlic">Exclusive places</h3>
        <h1 class="center fs-1 w-5 mt-2">Popular Packages</h1>
        <div class="populer d-flex mt-3">
            <div class="populer-img">
                <img src="{{ asset('/') }}background/4.png" alt="">
                <div class="populer-place">
                    <h3 class="w-2 fs-3">Switzerland</h3>
                    <h5 class="w-2 fs-5 mt-1">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque.</h5>
                        <div class="populer-title d-flex mt-1">
                            <h4 class="w-3 fs-4">$100.00/person</h4>
                            <h4  class="w-3 fs-4">02 Days Tour</h4>
                        </div>
                </div>
            </div>
            <div class="populer-img">
                <img src="{{ asset('/') }}background/5.png" alt="">
                <div class="populer-place">
                    <h3 class="w-2 fs-3">Roman</h3>
                    <h5 class="w-2 fs-5 mt-1">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque.</h5>
                        <div class="populer-title d-flex mt-1">
                            <h4 class="w-3 fs-4">$100.00/person</h4>
                            <h4 class="w-3 fs-4">02 Days Tour</h4>
                        </div>
                </div>
            </div>
            <div class="populer-img">
                <img src="{{ asset('/') }}background/6.png" alt="">
                <div class="populer-place">
                    <h3 class="w-2 fs-3 mt-1">Maldive</h3>
                    <h5 class="w-2 fs-5 mt-1">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque.</h5>
                        <div class="populer-title d-flex mt-1">
                            <h4 class="w-3 fs-4">$100.00/person</h4>
                            <h4 class="w-3 fs-4">02 Days Tour</h4>
                        </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection
