<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <!-- Font Icon -->
     <link rel="stylesheet" href="{{ url('fonts/material-icon/css/material-design-iconic-font.min.css') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Main css -->
     <!--Bootstrap css-->
     <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
     <!--Magnific popup css-->
     <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">
     <!--Themify icon css-->
     <link rel="stylesheet" href="{{ url('css/themify-icons.css') }}">
     <!--Fontawesome icon css-->
     <link rel="stylesheet" href="{{url('css/all.min.css')}}">
     <!--Datable min css-->
     <link rel="stylesheet" href="{{ url('css/datatables.min.css') }}">
     <!--animated css-->
     <link rel="stylesheet" href="{{ url('css/animate.min.css') }}">
     <!--Owl carousel css-->
     <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
     <link rel="stylesheet" href="{{ url('css/owl.carousel.min.css') }}">
     <!--custom css-->
     <link rel="stylesheet" href="{{url('css/style.css')}}">

     <!--responsive css-->
     <link rel="stylesheet" href="url('css/responsive.css')">
     <!-- Font Icon -->
     <link rel="stylesheet" href="{{ url('fonts1/material-icon/css/material-design-iconic-font.min.css') }}">
 
     <!-- Main css -->
     <link rel="stylesheet" href="{{ url('css1/style.css') }}s">
     <style>
        h3 {
            font-family: monospace;
            font-weight: bold;
            color: #fff;
            font-size: 45px;
            text-align: center;
        }
        
        #contactus {
            -webkit-box-shadow: 3px 6px 32px 2px rgba(0, 0, 0, 0.72);
            -moz-box-shadow: 3px 6px 32px 2px rgba(0, 0, 0, 0.72);
            box-shadow: 3px 6px 32px 2px rgba(0, 0, 0, 0.72);
            background-image: linear-gradient( rgba(0, 0, 0, 0.466), rgba(255, 255, 255, 0.164));
            border-radius: 10px;
            background-image: url({{ url('img/testimonials\ img1.jpg') }});
            background-repeat: no-repeat;
            background-size: cover;
        }
        #contactus1 {
            -webkit-box-shadow: 3px 6px 32px 2px rgba(0, 0, 0, 0.72);
            -moz-box-shadow: 3px 6px 32px 2px rgba(0, 0, 0, 0.72);
            box-shadow: 3px 6px 32px 2px rgba(0, 0, 0, 0.72);
            background-image: linear-gradient( rgba(0, 0, 0, 0.466), rgba(255, 255, 255, 0.164));
            border-radius: 10px;
            background-image: url({{ url('') }});
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        label {
            color: #ffffff;
        }
        
        input[type=text],
        input[type=Email],
        input[type=file],
        input[type=Number],  
        input[type=date],  
        .section {
            background: transparent;
            border: none;
            border-bottom: 2px solid #ccc;
            color: #ffffff;
            transition: 0.3s ease-in-out;
        }
        
        
        input[type=text]::placeholder,
        input[type=Email]::placeholder,
        input[type=file]::placeholder,
        input[type=date]::placeholder,
        input[type=Number]::placeholder
        .section {
            color: #ffffff;
            font-family: monospace;
            font-size: 17px;
        }
        
        input[type=text]:focus,
        input[type=text]:hover,
        input[type=Email]:focus,
        input[type=Email]:hover,
        input[type=file]:focus,
        input[type=file]:hover,
        input[type=Number]:focus,
        input[type=Number]:hover
        input[type=date]:focus,
        input[type=date]:hover
        .section:hover
        .section:focus {
            box-shadow: none;
            outline-color: none;
            border: none;
            border-bottom: 2px solid #44b8f2;
        }
        .option{
            color: black
        }
       
        
        #textarea {
            background: transparent;
            border: none;
            border-bottom: 2px solid #ccc;
            color: #ffffff;
            transition: 0.3s ease-in-out;
        }
        
        #textarea::placeholder {
            color: #ffffff;
        }
        
        #textarea:focus,
        #textarea:hover {
            box-shadow: none;
            outline-color: none;
            border: none;
            border-bottom: 2px solid #44b8f2;
        }
        
        .btn-info {
            height: 35px;
            width: 40%;
            transition: .5 ease-in-out;
        }
        
        .btn-info:hover {
            background-color: #44b8f2;
        }
        
        .marg {
            margin-top: 100px;
        }
        
        .top {
            border-top: 2px solid red;
        }
        
        .bottom:hover {
            border-bottom: 2px solid black;
        }
        
        .bottom-1:hover {
            border-top: 2px solid black;
        }
        
        li .dropdown {
            position: relative;
            display: inline-block;
            text-decoration: none;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 6px 9px;
            text-decoration: none;
            display: block;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .geeks {
            overflow: hidden;
            margin: 0 auto;
        }
        
        .geeks img {
            width: 100%;
            transition: 0.5s all ease-in-out;
            
        }
        
        .geeks:hover img {
            transform: scale(1.1);
           
        }
       
        .hover{
            transition: 0.3s all ease-in-out; 
        }
        .hover:hover{
           
         
        cursor:pointer;
            box-shadow: 0px 20px 20px #555;
            border: 2px solid black;
        }
        
 
        
        .timer{
          margin: 15px 30px;
          width: 120px;
          background: rgba(245, 245, 245, 0.1);
          text-align: center;
          border-radius: 10px;
          box-shadow: 15px 10px 20px #6660;
          cursor: pointer;
        }
        
        .timer p{
          color: #fff;
          font-size: 45px;
          margin: 25px 8px;
        }
        
        .timer h6{
          margin: 0;
          padding: 10px;
          font-size: 1em;
          background: rgba(0, 0, 0,0.5);
          color: #fff;
          text-transform:uppercase;
          border-bottom-right-radius: 10px;
          border-bottom-left-radius: 10px;
          box-shadow: 15px 10px 20px #000;}
            </style>


</head>
<body>
    <!--header section start-->
    <header class="header">    
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ url('images/logo-white.png') }}" alt="logo" class="img-fluid" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
        </button>
            <div class="collapse navbar-collapse h-auto offset-1" id="navbarSupportedContent">
                <ul class="navbar-nav  menu">
                    <li><a href="/"> Home</a>
                    </li>
                    <li><a href="/about">About Corona</a></li>
                    <li><a href="/symptoms">Symptoms</a></li>
                    <li><a href="/prevention">Prevention</a></li>
                    <li><a href="/blog">Blog</a>
                    </li>
                    <li><a href="#" class="dropdown-toggle">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="/pages/hospital">Hospitals</a></li>
                            <li><a href="/pages/hospitalregister">Register Hospital</a></li>
                            <li><a href="/pages/commingsoon">Comming Soon </a></li>
                            <li><a href="/pages/track">Check Appointment</a></li>
                           

                        </ul>
                    </li>
                    </li>
                    <li><a href="/faq">FAQs</a></li>
                    <li><a href="/contact">Contact Us</a></li>

                </ul>


            </div>
            <ul class="navbar-nav  menu ">
                @if (session()->has('uemail'))


                <li class="fw-bold">
                    <a class="dropdown-toggle text-light">User : {{ session()->get('uemail') }}</a>
                    <ul class="sub-menu me-5">

                        <li><a href="{{ url('/logout') }}" class="btn btn-outline-danger">Logout</a></li>
                    </ul>
                </li>
                @else

                <li class="fw-bold"><a class="text-warning" href="#" class="dropdown-toggle">User</a>
                    <ul class="sub-menu me-5">

                        <li><a href="{{ url('/register') }}" class="btn btn-outline-info  btn-sm">Register</a></li>
                        <li><a href="{{ url('/login') }}" class="btn btn-outline-info  btn-sm">login</a></li>
                       
                    </ul>
                </li>

                 @endif
            </ul>
        </div>
    </nav>
</header>
    @yield('content')



<!--footer section start-->
<footer class="footer-section gradient-overlay ptb-100 position-relative" style="background: url({{ url('img/header-bg-2.jpg') }})no-repeat center center / cover">
    <div class="shape5"><img src="{{ url('img/shape5.png') }}" alt="shape"></div>
    <div class="shape6 rotateme"><img src="{{ url('img/shape3.svg') }}" width="64" alt="shape"></div>
    <div class="shape7"><img src="{{ url('img/shape4.svg') }}" width="60" alt="shape"></div>
    <div class="shape8 rotateme"><img src="{{ url('img/shape2.svg') }}" alt="shape"></div>
    <div class="container">
        <!--footer top start-->
        <div class="row justify-content-between">
            <div class="col-md-4 col-lg-4">
                <div class="footer-nav-wrap text-white">
                    <img src="{{ url('img/logo-white.png') }}" alt="logo" class="mb-3">
                    <p>Subscribe our newsletter for latest update.</p>

                    <form class="newsletter-form">
                        <input type="text" class="input-newsletter" placeholder="Enter your email address" name="EMAIL" required="" autocomplete="off">
                        <button type="submit" class="disabled" style="pointer-events: all; cursor: pointer;"><i class="fas fa-paper-plane"></i></button>
                    </form>

                    <div class="social-nav mt-4">
                        <ul class="list-unstyled social-list mb-0">
                            <li class="list-inline-item tooltip-hover">
                                <a href="#" class="rounded"><span class="fa-brands fa-facebook"></span></a>
                                <div class="tooltip-item">Facebook</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="fa-brands fa-twitter"></span></a>
                                <div class="tooltip-item">Twitter</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="fa-brands fa-linkedin"></span></a>
                                <div class="tooltip-item">Linkedin</div>
                            </li>
                            <li class="list-inline-item tooltip-hover"><a href="#" class="rounded"><span class="fa-brands fa-dribbble"></span></a>
                                <div class="tooltip-item">Dribbble</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-7">
                <div class="row footer-top-wrap justify-content-around">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-nav-wrap text-white">
                            <h4 class="text-white">QUICK LINKS</h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Symptoms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Prevention</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Corona</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-nav-wrap text-white">
                            <h4 class="text-white">HELPFULL LINK</h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Situation Reports</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Advice For Public</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Prevention</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Symptoms</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Donor & Partners</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-nav-wrap text-white">
                            <h4 class="text-white">RESOURCES</h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">WHO Website</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">CDC Website</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Harvard Health</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">History of Corona</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">NHS Website</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer top end-->
        <hr class="custom-hr">
        <!--footer copyright start-->
        <div class="row align-items-center justify-content-between">
            <div class="col-md-5 col-lg-5">
                <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                    rights reserved by
                    <a href="/" target="_blank">ThemeTags</a></p>
            </div>
            <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                <ul class="list-inline policy-nav text-right">
                    <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
        <!--footer copyright end-->
    </div>
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-hand-point-up"></span>
</button>
<!--bottom to top button end-->


    <!-- JS -->
    <script src="{{ url('vendor1/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('js1/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

<!--jQuery-->
<script src="{{ url('/js/jquery-3.4.1.min.js') }}"></script>
<!--Popper js-->
<script src="{{ url('/js/popper.min.js') }}"></script>
<!--Bootstrap js-->
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<!--Magnific popup js-->
<script src="{{ url('/js/jquery.magnific-popup.min.js') }}"></script>
<!--jquery easing js-->
<script src="{{ url('/js/jquery.easing.min.js') }}"></script>
<!--datatable js-->
<script src="{{ url('/js/datatables.min.js') }}"></script>
<!--wow js-->
<script src="{{ url('/js/wow.min.js') }}"></script>
<!--owl carousel js-->
<script src="{{ url('/js/owl.carousel.min.js') }}"></script>
<!--countdown js-->
<script src="{{ url('/js/jquery.countdown.min.js') }}"></script>
<!--custom js-->
<script src="{{ url('/js/scripts.js') }}"></script>
<script src="{{ url('vendor1/jquery/jquery.min.js') }}"></script>
<script src="{{ url('js1/main.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $(".number").counterUp({
            delay: 10,
            time: 1000
        });

    });
</script>
<script>
  
    var countDownDate = new Date("May 24, 2024 01:08:25").getTime();
    var x = setInterval(function() {
  
    var now = new Date().getTime();
    var distance = countDownDate - now;
  
  
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    document.getElementById("day").innerHTML = days;
    document.getElementById("hour").innerHTML = hours;
    document.getElementById("minute").innerHTML = minutes;
    document.getElementById("second").innerHTML = seconds;
    });
  
  </script>

</body>
</html>
