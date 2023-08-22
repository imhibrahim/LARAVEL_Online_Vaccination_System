@extends('layouts.homelayout')
@section('content')
<!--loader start-->
<div id="preloader">
    <div class="loader1">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>

<!--header section start-->
<section class="hero-section ptb-100 gradient-overlay" style="background: url({{ url('img/header-bg-5.jpg') }})no-repeat center center / cover">
    <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            
            <div class="col-md-8 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0" style="font-family: Colonna MT">All REGISTERED Hospital</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item "><a href="#">Home &rarr;</a></li>

                            <li class="list-inline-item  active">Hospital  covid-19</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--header section end-->
<br><br><br><br>
<h1 class="text-center" style="font-family: Colonna MT">All Hospitals </h1>

<br><br>

<div class="container">
    <div class="row text-center">
          @foreach ($data as $item )
        <div class="col-md-4 mt-3">

            <div class="card hover" style="background-color: rgba(255, 239, 213,0.3)">
                <div class="geeks mt-1">
                <img src="{{ url('/') }}/{{ $item->h_pic }}" class="card-img-top img-thumbnail">
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$item->hname}}</h5>
                  <p class="card-text">{{$item->haddress}}</p>
                  <a href="{{ url('/pages/hospital/detailes') }}/{{ $item->hid }}"
                     class="btn btn-outline-info">Get More Info</a>



           
                  
                </div>
              </div>
            </div>
            @endforeach 
            
        
        
        
    </div>
</div>

@endsection