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
                            <h1 class="h4 text-gray-900 mb-4">Hospital Insert</h1>
                        </div>
                        <form method= "POST" action="{{ url('/dashboard/storehospital') }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user border border-info border-2 rounded" name="hname"placeholder="hospital Name" value="{{ old('hname') }}">
                                    @error('hname')
                                    <p class="text-danger">{{ $message }}</p>

                                    @enderror

                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user border 
                                    border-info border-2 rounded" placeholder="Hospitsl city"
                                     value="{{ old('hcity') }}"name="hcity">
                                    @error('hcity')
                                    <p class="text-danger">{{ $message }}</p>

                                    @enderror
                                </div>

                            </div>
                      <div class="row">

                         <div class="col-md-3"> 
                            <input type="text" class="form-control border border-info border-2 rounded"
                             placeholder="hospital number" name="hnum" value="{{ old('hnum') }}">
                            @error('hnum')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                         <div class="col-md-3">

                            <input type="mail" placeholder="email" 
                            class="form-control border border-info border-2 rounded " 
                            name="hmail" value="{{ old('hmail') }}">
                            @error('hmail')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                         <div class="col-md-6">
                            <input type="file" class="form-control border border-info border-2 rounded" 
                           placeholder="himg " value="{{ old('himg') }}"  name="himg">
                                    @error('himg')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                           </div>
                      </div>
                            <div class="form-group row mt-1">
                                <div class="col-sm-6 mb-3 mb-sm-0 ">
                                    <input type="url" class="form-control border border-info border-2 rounded"
                                      placeholder="hweb " value="{{ old('hweb') }}" name="hweb">
                                    @error('hweb')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select name="h_st" class="form-select border border-info border-2 rounded">
                                        <option disabled selected>--Status--</option>
                                        <option value="1">Availaible</option>
                                        <option value="0">Unavailaible</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <textarea class="form-control"  placeholder="address"  style="height: 100px"
                                     name="haddress" value="{{ old('haddress') }}"></textarea>
                                    @error('haddress')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <button  type="submit" name="insert" class="btn btn-primary btn-user btn-block">
                                Insert
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
