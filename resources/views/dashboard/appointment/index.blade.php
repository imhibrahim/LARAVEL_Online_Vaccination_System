@extends('layouts.dashboardlayout')
@section('mycontant')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable All Appointments</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Patient_name</th>
                  <th>address</th>
                  <th>phone</th>
                  <th>Patient_pic</th>
                  <th>Hospital</th>
                  <th>Diseas</th>
                  <th>Vaccine</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data3 as $item )
                    
<tr>
<td>{{$item->appointment_id}}</td>
<td>{{ $item->patient_name }}</td>
<td>{{ $item->p_address }}</td>
<td>{{ $item->p_phonenumber}}</td>
<td><img src="{{ url('/') }}/{{ $item->p_pic }}" height="50px" width="80px"></td>

<td>{{ $item->h_id}}</td>

<td>{{ $item->diseas}}</td>
<td>{{ $item->vaccine_name}}</td>
<td>{{ $item->appointment_status}}</td>
<td><a href="{{ url('/dashboard/deleteappointment') }}/{{ $item->appointment_id}}"
   class="btn btn-sm btn-danger mt-1">delete</a></td>

                </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  </div>

@endsection
