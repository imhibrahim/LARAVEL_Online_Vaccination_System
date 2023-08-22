@extends('layouts.dashboardlayout')
@section('mycontant')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
                <div class="col-md-8 offset-1">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Hospital Update</h1>
                        </div>
                        <form method="POST"
                         action="{{ url('/dashboard/updatehospital')}}/{{$result[0]->hid}} " enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user border border-info border-2 rounded" name="hname"placeholder="hospital Name" value="{{$result[0]->hname }}">
                                    @error('hname')
                                    <p class="text-danger">{{ $message }}</p>

                                    @enderror

                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user border 
                                    border-info border-2 rounded" name="hcity"placeholder="Hospitsl city"
                                     value="{{ $result[0]->hcity }}">
                                    @error('hcity')
                                    <p class="text-danger">{{ $message }}</p>

                                    @enderror
                                </div>

                            </div>
                      <div class="row">

                         <div class="col-md-3"> <input type="text" class="form-control border 
                            border-info border-2 rounded" placeholder="doctor number" name="hnum"
                             value="{{$result[0]->hpnumber }}">
                            @error('hnum')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                         <div class="col-md-3">

                            <input type="mail" placeholder="email" class="form-control border border-info border-2 rounded " name="hmail" value="{{$result[0]->hemail }}"">
                            @error('hmail')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                         <div class="col-md-6">


<input type="file" class="form-control border border-info border-2 rounded" value="{{ old('himg') }}" placeholder="himg " name="himg">
                                    <input type="hidden" name="oldimg" value="{{$result[0]->h_pic}}">
                                    <img src="{{ url('/') }}/{{ $result[0]->h_pic }}" width="80px" height="50px" alt="">
                      </div></div>
                      </div>
                      <div class="form-group row mt-1">
                        <div class="col-sm-6 mb-3 mb-sm-0 ">
                            <input type="url" class="form-control border border-info border-2 rounded" value="{{$result[0]->hwebsite}}" placeholder="hweb " name="hweb">
                            @error('hweb')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select name="hstatus" class="form-select border border-info border-2 rounded">
                                <option disabled selected>--Status--</option>
                                @if ($result[0]->hstatus ==1)
                                      <option selected value="1">Availaible</option>
                                      <option value="0">Unavailaible</option>
                                      @else
                                      <option  value="1">Availaible</option>
                                      <option selected value="0">Unavailaible</option>

                                @endif


                            </select>
                        </div>
                        <div class="col-md-12 mt-2">
                            <textarea class="form-control" value="" name="haddress" placeholder="address"  style="height: 100px">{{$result[0]->haddress}}</textarea>
                            @error('haddress')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                    <button  type="submit"  class="btn btn-primary btn-user btn-block"> Update
                            </button>
                            <hr>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
