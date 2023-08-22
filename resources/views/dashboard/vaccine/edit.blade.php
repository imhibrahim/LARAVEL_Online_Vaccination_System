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
                            <h1 class="h4 text-gray-900 mb-4">Vaccine Update</h1>
                        </div>
                        <form method="POST" action="{{ url('/dashboard/updatevaccine') }}/{{$result[0]->v_id  }}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user border border-info border-2 rounded" name="vname"placeholder="vaccine Name" value="{{$result[0]->v_name }}">
                                    @error('vname')
                                    <p class="text-danger">{{ $message }}</p>

                                    @enderror

                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select name="vmanu" class="form-select border border-info border-2 rounded">
                                        <option disabled selected>--select 	vaccine Manufacturer--</option>
                                        <option value="Pfizer">Pfizer</option>
                                        <option value="BioNTech">BioNTech</option>
                                        <option value="Sinovac">Sinovac</option>
                                        <option value="Moderna">Moderna</option>
                                        <option value="Sanofi">Sanofi</option>
                                    </select>
                                </div>

                            </div>
                      <div class="row">

                         <div class="col-md-3">
                            <input type="text" class="form-control border border-info border-2 rounded" placeholder="batch number" name="vbatch" value="{{$result[0]->v_Batch_Number }}">
                            @error('vbatch')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                         <div class="col-md-3">

                            <input type="text" placeholder="Expiration_Date" class="form-control border border-info border-2 rounded " name="vexp" value="{{$result[0]->v_Expiration_Date }}"">
                            @error('vexp')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                         <div class="col-md-6">


                            <select name="vage" class="form-select border border-info border-2 rounded">
                                <option disabled selected>--select 	Recommended_Age--</option>
                               
                                <option value="10 year to 17 year">10 year to 17 year</option>
                                <option value="18 year to 25 year">18 year to 25 year</option>
                                <option value="25 year to 40 year">25 year to 40 year</option>
                                <option value="40 year to 60 year">40 year to 60 year</option>

                            </select>
                      </div></div>
                      </div>
                      <div class="form-group row mt-1">
                        <div class="col-sm-6 mb-3 mb-sm-0 ">
                            <select name="vdose" class="form-select border border-info border-2 rounded">
                                <option disabled selected>--select 	vaccine Dose_Count--</option>
                                @if ($result[0]->v_Dose_Count ==1)
                                    <option value="first Dose" selected>first Dose</option>
                                <option value="second Dose">second Dose</option>
                                @else
                                <option value="first Dose" >first Dose</option>
                                <option value="second Dose" selected>second Dose</option>
                                @endif
                                


                            </select>
                        </div>
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <select name="vstatus" class="form-select border border-info border-2 rounded">
                                <option disabled selected>--Status--</option>
                                @if ($result[0]->v_status ==1)
                                      <option selected value="1">Availaible</option>
                                      <option value="0">Unavailaible</option>
                                      @else
                                      <option  value="1">Availaible</option>
                                      <option selected value="0">Unavailaible</option>

                                @endif


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
