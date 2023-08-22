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

<!--body content wrap start-->
    <div class="main">

        <!--hero background image with content slider start-->
        <section class="hero-section hero-bg-2 ptb-100 full-screen">
            <div class="container">
                <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">

                    <div class="col-md-2"></div>


                    <div class="col-md-8 mt-4" id="contactus1">
                        <h3 class="mt-3" style="font-family: Harrington">Appointment</h3>
                        <br><br>
                        <form method= "POST" action="{{ url('/pages/hospital/appointmentstore') }}"  enctype="multipart/form-data">
        @csrf
                            <div class="row">
            <div class="col-md-6">
                <input type="text"   value="{{ old('pname') }}" class="form-control"
                 placeholder="patient_name" name="pname">
                @error('pname')
                <p class="text-danger">{{ $message }}</p>

                @enderror
            </div>
            <div class="col-md-6">
                <select name="vname" class="form-select rounded section mt-3">
                    <option disabled selected class="text-center">- - -vaccine_name- - -</option>
                    @foreach ($data1 as $item)
                    <option value="{{$item->v_id}}" class="text-dark">{{$item->v_name}}</option>     
                    @endforeach
                </select>
            </div>
                            
        </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6">
        
                                    <input type="date"  class="form-control" value="{{ old('appdate') }}"
                                      name="appdate" >
                                    @error('appdate')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
        
                                    <input type="Number" 
                                    class="form-control" placeholder="Patient : +92XX XXXXXXX"
                                     name="number" value="{{ old('number') }}">
                                    @error('number')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
        
                            </div>
                            <br><br>
<div class="row">

<div class="col-md-6">
    <input type="file" placeholder="Enter Picture" class="form-control" value="{{ old('ppic') }}" 
     name="ppic" >
    @error('ppic')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="col-md-6">
    <input type="text" placeholder="Diseas" class="form-control" value="{{ old('diseas') }}" name="diseas" >
    @error('diseas')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
</div>
                            
                            <br><br>
</div>
        <div class="row">

        <div class="col-md-12">
            <textarea rows="5" placeholder="Enter Address" id="textarea" 
            class="form-control"  name="address" value="{{ old('address') }}"></textarea>
            @error('address')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-6  mt-4">
            <select name="hid" class="form-select rounded section ">
                <option disabled selected class="text-center">- - -Hospital- - -</option>
                @foreach ($data2 as $item)
                                       <option value="{{$item->hid}}" class="text-dark">{{$item->hname}}</option>
                                           
                                       @endforeach
            </select>
        </div>
        <div class="col-md-6 mt-2">
            <input type="email" placeholder="@email.com" class="form-control" 
            value="{{ old('mail') }}" name="mail">
    @error('mail')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
        </div>
       

          </div>                  <br>
                            <center>
                                <button type="Submit" class="btn btn-outline-info">Submit</button>
                            </center>
                            <br><br>
                        </form>
                    </div>
                    <div class="col-md-2"></div>
                    
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