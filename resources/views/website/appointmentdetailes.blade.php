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
                        <h2 class="text-white mb-0">Your Appointment Detailes</h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->



<div class="container mt-5">
    <div class="row text-center">
       
        <div class="col-md-5 offset-3 mt-5 mb-5 p-5 "style="background-color:rgba(255, 239, 213,0.8);   box-shadow: 8px 8px 16px 7px rgba(0, 0, 0, 1)">
           
<h4>Your Appointment Detailes</h4>
<p>Your Name is : {{ $req->pname }}</p>
<p>Your Vaccine name is : {{ $req->vname }}</p>
<p>Your Appointment date is : {{ $req->appdate }}</p>
<p>Your Phone Nubmber is : {{ $req->number}}</p>
<p>Your picture : {{ $req->ppic }}</p>
<p>Your diseas is : {{ $req->diseas}}</p>
<p>Your address is : {{ $req->address}}</p>
<p>Your Hospital : {{ $req->hid }}</p>
<p>Your Mail is :{{ $req->mail }}  </p>
<button class="btn btn-outline-danger"><a href="/">Go Back</a></button>

        </div>
    
    </div>
</div>

<script>
alert('Your Appointment is successfull please next time check your detailes please insert your appointment email');    
</script>
    @endsection