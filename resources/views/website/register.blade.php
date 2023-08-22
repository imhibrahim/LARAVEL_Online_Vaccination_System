@extends('layouts.homelayout')
@section('content')
{{--  

<section class="signup">
    <div class="container">
        <div class="signup-content">

            <div class="signup-form mt-5 ">
                <h2 class="form-title">Sign up</h2>
                <form action="/registerstore" method="POST" class="register-form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="uname"  placeholder="Your Name"/>
                        @error('uname')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="umail" id="email" placeholder="Your Email"/>
                        @error('umail')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="upass" id="pass" placeholder="Password"/>
                        @error('upass')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group form-button">
                        <input type="submit"class="form-submit"/>
                    </div>
                </form>
            </div>
            <div class="signup-image mt-5">
                <figure><img src="{{ url('images1/signup-image.jpg') }}" alt="sing up image"></figure>
                <a href="/login" class="signup-image-link">I am already member</a>
            </div>


        </div>
    </div>
</section>  --}}

<div class="main">

    <!--hero background image with content slider start-->
    <section class="hero-section hero-bg-2 ptb-100 full-screen">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">Create Your Account</h1>
                        <p class="lead">
                            Keep your face always toward the sunshine - and shadows will fall behind you.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Create account</h6>
                                <p class="text-muted mb-0">Made with love by developers for developers.</p>
                            </div>
                            <form class="login-signup-form" method="POST" action="{{ url('/registerstore') }}">
                               @csrf
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    Your Name
                                </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="fa-solid fa-user"></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Enter your name" name="uname" {{ old( 'uname') }}> @error('uname')
                                        <p class="text-danger">{{ $message }}</p>

                                        @enderror

                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    Email Address
                                </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="fa-solid fa-envelope"></span>
                                        </div>
                                        <input type="email" class="form-control" placeholder="name@address.com" name="umail" {{ old( 'umail') }}>
                                         @error('umail')
                                        <p class="text-danger">{{ $message }}</p>

                                        @enderror

                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <!-- Label -->
                                    <label class="pb-1">
                                    Password
                                </label>
                                    <!-- Input group -->
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="fa-solid fa-lock"></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Enter your password" name="upass" {{ old( 'upass') }}> @error('upass')
                                        <p class="text-danger">{{ $message }}</p>

                                        @enderror
                                    </div>
                                </div>

                                <div class="my-4">
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="check-terms">
                                        <label class="custom-control-label" for="check-terms">I agree to the <a href="#">terms and conditions</a></label>
                                    </div>
                                </div>

                                <!-- Submit -->
                                <button class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                                Sign up
                            </button>
                            </form>

                        </div>
                        <div class="card-footer px-md-5 bg-transparent border-top"><small>Already have an acocunt?</small>
                            <a href="/login" class="small">Sign in</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero background image with content slider end-->


</div>
<!--body content wrap end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
<span class="fas fa-hand-point-up"></span>
</button>
<!--bottom to top button end-->


@endsection
