
@extends('layouts.homelayout')
@section('content')


</head>
<body>

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

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <section class="hero-section ptb-100 gradient-overlay full-screen"
             style="background: url({{ url('img/slider-img-1.jpg') }})no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="hero-content-left text-white text-center">
                        <h1 class="text-white">We're Coming Soon</h1>
                        <p class="lead">Our website is under construction.
                             We'll be here soon with our new awesome site, subscribe to be notified.</p>
                     
<div class="container">
    <div class="row text-center">
       
        <div class="col-md-3"><div class="timer">
            <p id="day"></p>
            <h6>days</h6>
          </div>
        </div>
         <div class="col-md-3"> <div class="timer">
            <p id="hour"></p>
            <h6>hours</h6>
          </div></div>
        <div class="col-md-3">
          <div class="timer">
            <p id="minute"></p>
            <h6>minutes</h6>
          </div></div>
        <div class="col-md-3"><div class="timer">
            <p id="second"></p>
            <h6>seconds</h6>
          </div></div>
        
         
        
          
    </div>
</div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-5">
                    <form action="#" method="post" 
                    class="subscribe-form subscribe-form-footer subscribe-form-two d-none d-md-block d-lg-block">
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control input" id="email-footer" name="email" placeholder="info@yourdomain.com">
                            <input type="submit" class="button btn accent-solid-btn" id="submit-footer" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

</div>
<!--body content wrap end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-hand-point-up"></span>
</button>
<!--bottom to top button end-->

@endsection
