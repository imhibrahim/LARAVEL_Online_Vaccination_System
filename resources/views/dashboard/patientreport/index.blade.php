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
              <h3 class="card-title">DataTable All Patients Reports</h3>
             

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

                <tr>

                <th>#</th>
                  <th>patient</th>
                  <th>Hospital</th>
                  <th>Vaccine</th>
                  <th>diseases</th>
                  <th>Vaccination Date</th>
                  <th>Dose Number</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item )
<tr>
<td>{{ $item->test_id }}</td>
<td>{{ $item->appointment_id}}</td>
<td>{{ $item->hid}}</td>
<td>{{ $item->vid}}</td>
<td>{{ $item->diseases}}</td>
<td>{{ $item->Vaccination_Date}}</td>
<td>{{ $item->Dose_Number}}</td>

<td><a href="{{ url('/dashboard/deletepatientreport') }}/{{ $item->test_id}}" 
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
