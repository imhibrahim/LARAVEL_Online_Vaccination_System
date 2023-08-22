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
           <h4>Enter Your Mail & Check The Report</h4>
            <form class="login-signup-form" method="POST" action="{{ url('/report') }}">
                @csrf
            <input type="mail" placeholder="email" class="form-control border border-info border-2 rounded  mb-3
            " name="mail" value="{{ old('mail') }}">
            @error('mail')
            <p class="text-danger">{{ $message }}</p>
            @enderror
<button class="btn btn-outline-danger" type="submit" >Check</button>
</form>

        </div>
    
    </div>
</div>

<script>
alert(' please insert your  last time Appointment email');    
</script>
    @endsection