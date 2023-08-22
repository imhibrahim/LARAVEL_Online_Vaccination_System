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
                            <h1 class="h4 text-gray-900 mb-4">Doctor Update</h1>
                        </div>
                        <form method="POST" action="{{ url('/dashboard/updatedoctor') }}/{{$result[0]->did  }} " enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user border border-info border-2 rounded" name="dname"placeholder="doctor Name" value="{{$result[0]->dname }}">
                                    @error('dname')
                                    <p class="text-danger">{{ $massage }}</p>

                                    @enderror

                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" value="{{ $result[0]->d_Specialization }}" name="d_sp" placeholder="Specialization" class="form-control border border-info border-2 rounded">
                                    @error('d_sp')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                      <div class="row">

                         <div class="col-md-3"> <input type="text" class="form-control border border-info border-2 rounded"
                             placeholder="doctor number" name="dnum" value="{{$result[0]->dpnumber }}">
                            @error('dnum')
                            <p class="text-danger">{{ $massage }}</p>
                            @enderror
                        </div>
                         <div class="col-md-3">

                            <input type="mail" placeholder="email" class="form-control border border-info border-2 rounded " name="dmail" value="{{$result[0]->demail }}"">
                            @error('dmail')
                            <p class="text-danger">{{ $massage }}</p>
                            @enderror
                        </div>
                         <div class="col-md-6">

                             
                             <div class="mb-3">
                                <select name="dgander" class="form-select border border-info border-2 rounded">
                                    <option disabled selected>--Status--</option>
                                    @if ($result[0]->dgander == 'm')
                                        
                                    
                                    <option value="m" selected>male</option>
                                    <option value="f">female</option>
                                    @else
                                    <option value="m" >male</option>
                                    <option value="f" selected>female</option>
      @endif                              
                                </select>


                      </div>
                    </div>
                      </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="file" class="form-control border border-info border-2 rounded" value="{{ old('dimg') }}" placeholder="dimg " name="img">
                                    <input type="hidden" name="oldimg" value="{{$result[0]->d_pic}}">
                                    <img src="{{ url('/') }}/{{ $result[0]->d_pic }}" width="80px" height="50px" alt="">
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select name="d_st" class="form-select border border-info border-2 rounded">
                                        <option disabled selected>--Status--</option>
                                        @if ($result[0]->dstatus ==1)
                                              <option selected value="1">Availaible</option>
                                              <option value="0">Unavailaible</option>
                                              @else
                                              <option  value="1">Availaible</option>
                                              <option selected value="0">Unavailaible</option>

                                        @endif


                                    </select>
                                </div>
                                <div class="col-md-10 offset-1 mt-2">
                                    <select name="hid" class="form-select border border-info border-2 rounded">
                                        <option disabled selected class="text-center">--Hospital Name--</option>
                                       @foreach ($hospital as $item)
                                       <option value="{{ $item->hid}}"
                                        @if ($result[0]->hid== $item->hid)
                                        selected                                            
                                        @endif>{{ $item->hname}}</option>
                                           
                                       @endforeach
                                    </select>
                                </div>

                            </div>
                            <button  type="submit" name="insert" class="btn btn-primary btn-user btn-block">
                                Update
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
