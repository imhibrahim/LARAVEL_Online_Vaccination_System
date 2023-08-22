@extends('layouts.homelayout')
@section('content')

<!--body content wrap start-->
<div class="main">

    <!--header section start-->
    <section class="hero-section ptb-100 gradient-overlay" style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="hero-bottom-shape-two" style="background: url('img/hero-bottom-shape.svg')no-repeat bottom center"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">Prevent From COVID-19</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">

                                <li class="list-inline-item breadcrumb-item active">Prevention</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--header section end-->

    <!--prevention section start-->
    <section class="prevention-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>How to Prevent Coronavirus</h2>
                        <p class="lead">If you are sick with COVID-19 or think you might have COVID-19, follow the steps to care for yourself and to help other people in your home and community.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <ul class="prevention-list">
                        <li class="d-flex align-items-start py-3">
                            <img src="img/prevention-1.png" width="100" class="img-fluid mr-4" alt="prevention">
                            <div class="prevention-info">
                                <h5>Stay home except to get medical care</h5>
                                <ul class="list-dot">
                                    <li><strong>Stay home -</strong> Most people with COVID-19 have mild illness and are able to recover at home without medical care. Do not leave your home, except to get medical care. Do not visit public areas.
                                    </li>
                                    <li><strong>Stay in touch with your doctor -</strong> Call before you get medical care. Be sure to get care if you have trouble breathing, or have any other emergency warning signs, or if you think it is an emergency.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-flex align-items-start py-3">
                            <img src="img/prevention-2.png" width="100" class="img-fluid mr-4" alt="prevention">
                            <div class="prevention-info">
                                <h5>Separate yourself from other people</h5>
                                <ul class="list-dot">
                                    <li><strong>Stay away from others -</strong> As much as possible, you stay away from others. You should stay in a specific “sick room” if possible, and away from other people in your home. Use a separate bathroom, if
                                        available.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-flex align-items-start py-3">
                            <img src="img/prevention-3.png" width="100" class="img-fluid mr-4" alt="prevention">
                            <div class="prevention-info">
                                <h5>If you are sick wear a facemask</h5>
                                <ul class="list-dot">
                                    <li><strong>If you are sick -</strong> You should wear a facemask, if available, when you are around other people (including before you enter a healthcare provider,s office).
                                    </li>
                                    <li><strong>If you are caring for others -</strong> If the person who is sick is not able to wear a facemask (for example, because it causes trouble breathing), then as their caregiver, you should wear a facemask when
                                        in the same room with them. Visitors, other than caregivers, are not recommended.
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-6">
                    <ul class="prevention-list">
                        <li class="d-flex align-items-start py-3">
                            <img src="img/prevention-4.png" width="100" class="img-fluid mr-4" alt="prevention">
                            <div class="prevention-info">
                                <h5>Cover your coughs and sneezes</h5>
                                <ul class="list-dot">
                                    <li><strong>Cover -</strong> Cover your mouth and nose with a tissue when you cough or sneeze.
                                    </li>
                                    <li><strong>Dispose -</strong> Throw used tissues in a lined trash can.
                                    </li>
                                    <li><strong>Wash hands -</strong> Immediately wash your hands with soap and water for at least 20 seconds. If soap and water are not available, clean your hands with an alcohol-based hand sanitizer that contains at
                                        least 60% alcohol.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-flex align-items-start py-3">
                            <img src="img/prevention-5.png" width="100" class="img-fluid mr-4" alt="prevention">
                            <div class="prevention-info">
                                <h5>Clean your hands often</h5>
                                <ul class="list-dot">
                                    <li><strong>Wash hands -</strong> Wash your hands often with soap and water for at least 20 seconds. This is especially important after blowing your nose, coughing, or sneezing; going to the bathroom; and before eating
                                        or preparing food.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="d-flex align-items-start py-3">
                            <img src="img/prevention-6.png" width="100" class="img-fluid mr-4" alt="prevention">
                            <div class="prevention-info">
                                <h5>Monitor your symptoms</h5>
                                <ul class="list-dot">
                                    <li><strong>Symptoms  -</strong> Common symptoms of COVID-19 include fever and cough. Trouble breathing is a more serious symptom that means you should get medical attention.
                                    </li>
                                    <li><strong>Wear a facemask -</strong> If available, put on a facemask before you enter the building. If you can’t put on a facemask, cover your coughs and sneezes. Try to stay at least 6 feet away from other people.
                                        This will help protect the people in the office or waiting room.
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--prevention section end-->

    <!--wash your hand section start-->
    <section class="wash-hand-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>How to Wash Your Hands</h2>
                        <p class="lead">Get Immediate Activation or Express Transfer service free of charge. Enthusiastically enhance plug-and-play testing procedures and cross.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="counter-reset: number">
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h1.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Wet Hands</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h2.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Apply Shop</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h3.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Rub Hands Palm to Palm</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h4.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Lather The Back of Hands</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h5.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Scrub Between Your Fingers</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h6.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Rub The Back of Fingers</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h7.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Clean Thumbs</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h8.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Wash Fingernails</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h9.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Rinse Hands</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h10.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Dry with a Single Use Towel</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h11.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Use The Towel to Turn off</h5>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-3">
                    <div class="wahs-hand-single text-center p-4 py-sm-0 py-md-4 py-lg-4">
                        <img src="img/h12.svg" alt="wash hand" width="150" class="img-fluid">
                        <h5>Your Hands Are Clean</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--wash your hand section end-->


    <!--appointment form section start-->
    <section class="appointment-section ptb-100">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-6 align-self-center">
                    <div class="appointment-content">
                        <h2>The Best Medical Services, Doctors and Physicians</h2>
                        <p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol
                            based rub frequently and not touching your face. </p>
                        <h4>Open 24h - Every Day!</h4>
                        <p class="lead">Call Us : <span class="h4 color-primary">+763 65123567</span></p>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="appointment-form-wrap rounded border">
                        <ul class="nav nav-tabs appointment-tab" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#one" aria-controls="one" role="tab" aria-selected="true">Emergency Cases</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" aria-controls="two" role="tab" data-toggle="tab" href="#two" aria-selected="false">Make Appointment</a>
                            </li>
                        </ul>
                        <div class="tab-content appointment-form-content">
                            <div class="tab-pane fade active show" id="one">
                                <form action="#" class="appointment-form p-5">
                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="fa-regular fa-user"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="fa-solid fa-mobile-screen-button"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="fa-regular fa-envelope"></span>
                                                    </div>
                                                    <input type="email" class="form-control" placeholder="Enter Your Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-icon">
                                                        <span class="fa-solid fa-arrow-right-arrow-left"></span>
                                                    </div>
                                                    <select class="form-control" name="select">
                                                    <option>Select Depertment</option>
                                                    <option>Doctor</option>
                                                    <option>Medicine</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-3">
                                            <button type="submit" class="btn accent-solid-btn">
                                            Make Appointment
                                        </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="two">
                                <form action="#" class="appointment-form p-5">
                                    <div class="form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-user color-primary"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Enter Your Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-mobile color-primary"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Enter Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group input-group-merge">
                                                    <div class="input-icon">
                                                        <span class="ti-email color-primary"></span>
                                                    </div>
                                                    <input type="email" class="form-control" placeholder="Enter Your Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-icon">
                                                        <span class="ti-exchange-vertical color-primary"></span>
                                                    </div>
                                                    <select class="form-control" name="select">
                                                    <option>Select Depertment</option>
                                                    <option>Doctor</option>
                                                    <option>Medicine</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-3">
                                            <button type="submit" class="btn accent-solid-btn">
                                            Make Appointment
                                        </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--appointment form section end-->

</div>
<!--body content wrap end-->




@endsection

