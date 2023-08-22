@extends('layouts.homelayout')
@section('content')

<!--body content wrap start-->
    <div class="main">

        <!--hero background image with content slider start-->
        <section class="hero-section hero-bg-2 ptb-100 full-screen">
            <div class="container">
                <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">

                    <div class="col-md-2"></div>


                    <div class="col-md-8 mt-4" id="contactus">
                        <h3 class="mt-3" style="font-family: Harrington">Register Hospital</h3>
                        <br><br>
                        <form method= "POST" action="{{ url('/pages/storehospital') }}"  enctype="multipart/form-data">
        @csrf
                            <div class="row">
            <div class="col-md-6">
                <input type="text"   value="{{ old('hname') }}" class="form-control" placeholder="Enter Hospital Name" name="hname">
                @error('hname')
                <p class="text-danger">{{ $message }}</p>

                @enderror
            </div>
            <div class="col-md-6">
                <input type="text"  value="{{ old('hcity') }}"name="hcity" 
                 class="form-control" placeholder="Enter Hospital City">
                @error('hcity')
                <p class="text-danger">{{ $message }}</p>

                @enderror
            </div>
                            
        </div>
                            <br><br>
                            <div class="row">
                                <div class="col-md-6">
        
                                    <input type="Email" 
                                    class="form-control" placeholder="Enter Hospital Email"  name="hmail" value="{{ old('hmail') }}">
                                    @error('hmail')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
        
                                    <input type="Number" 
                                    class="form-control" placeholder="Hospital : +92XX XXXXXXX" name="hnum" value="{{ old('hnum') }}">
                                    @error('hnum')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
        
                            </div>
                            <br><br>
<div class="row">

<div class="col-md-6">
    <input type="file" placeholder="Enter Picture" class="form-control" value="{{ old('himg') }}"  name="himg" >
    @error('himg')
    <p class="text-danger">{{ $message }}</p>
    @enderror
</div>
<div class="col-md-6">
    <input type="text" placeholder="Website : https://xxxxxxx.com" class="form-control" value="{{ old('hweb') }}" name="hweb" >
    @error('hweb')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
</div>
                            
                            <br><br>
</div>
        <div class="row">

        <div class="col-md-12">
            <textarea rows="5" placeholder="Enter Hospital Addresss" id="textarea" 
            class="form-control"  name="haddress" value="{{ old('haddress') }}"></textarea>
            @error('haddress')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-4 offset-4 mt-4">
            <select name="h_st" class="form-select rounded section ">
                <option disabled selected class="text-center">- - -Status- - -</option>
                <option value="1" class="option text-center" >Availaible</option>
                <option value="0" class="option text-center" >Unavailaible</option>
            </select>
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