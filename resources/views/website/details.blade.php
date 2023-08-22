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
<!--loader end-->

<!--header section start-->

<!--header section end-->

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay" style="background: url({{ url('img/header-bg-5.jpg') }})no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url({{ url('img/hero-bottom-shape.svg') }})no-repeat bottom center"></div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">About The Hospital</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item "><a href="#">Home &rarr;</a></li>

                                <li class="list-inline-item  active">About the Hospital</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->



<div class="container mt-5">
    <div class="row">
       
        <div class="col-md-5">
            <div class="geeks mt-1">
            <img src="{{ url('/') }}/{{ $result[0]->h_pic }}" width="100%" class="mt-5 mb-5">
        </div></div>
        <div class="col-md-7 mb-5 border text-center">

            <h3 class="text-dark mt-2">{{ $result[0]->hname }}</h3>
            <h5 class="text-dark font-weight-lighter ">Hospital Addredd : {{ $result[0]->haddress }} </h5>
            <h6 class="text-dark font-weight-bold">Hospital Email : {{ $result[0]->hemail }}</h6>
            <p class="text-dark font-weight-bold">Hospital URL-Site : {{ $result[0]->hwebsite }}</p>
            <p class="text-dark font-weight-bold">Hospital Phone Number : {{ $result[0]->hpnumber }}</p>
            <p class="text-dark font-weight-bold">Hospital City : {{ $result[0]->hcity }}</p>
            @if ($result[0]->hstatus == 1)
            
                 <a href="/pages/hospital/addappointment" class="btn btn-outline-warning text-dark"> Get Appointment</a>
            @else
            <a href="/pages/hospital/addappointment" class="btn btn-outline-warning text-dark disabled"> Hospital Not Available</a>
                 @endif
            
            
            
          
                    
                
               
        </div>
      
    </div>
</div>


    @endsection