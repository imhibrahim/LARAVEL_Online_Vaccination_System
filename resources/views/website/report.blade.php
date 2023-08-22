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
                   
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->



<div class="container mt-5">
    <div class="row text-center">
       
        <div class="col-md-5 offset-3 mt-5 mb-5 p-5 "style="background-color:rgba(255, 239, 213,0.8);   box-shadow: 8px 8px 16px 7px rgba(0, 0, 0, 1)">
           <h4> Your  Report</h4>
           

<h4>Your Appointment Detailes</h4>
               
<p class="text-dark">Your Vaccine Name is : {{ $row[0]->vaccine_name}}</p>
<p class="text-dark">Your name is : {{ $row[0]->patient_name}}</p>
<p class="text-dark">Your Mail is : {{ $row[0]->pemail}}</p>
<p class="text-dark">Your address is : {{ $row[0]->p_address}}</p>
<p class="text-dark">Your Phone Nubmber : {{ $row[0]->	p_phonenumber}}</p>
<p class="text-dark">Your picture is : {{ $row[0]->p_pic}}</p>
<p class="text-dark">Your Hospital is : {{ $row[0]->h_id}}</p>
<p class="text-dark">Your diseas : {{ $row[0]->diseas}}</p>
<p class="text-dark">Your Appointment date is :{{ $row[0]->appointment_date}}  </p>
<button class="btn btn-outline-danger"><a href="/">Go Back</a></button>
        </div>
    
    </div>
</div>

<script>
alert(' please insert your  last time Appointment email');    
</script>
    @endsection