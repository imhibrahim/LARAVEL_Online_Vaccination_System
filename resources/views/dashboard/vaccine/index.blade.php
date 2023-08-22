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
              <h3 class="card-title">DataTable All Vaccine</h3>
              <button class="btn btn-outline-dark float-end"><a href="{{url('/dashboard/vaccine/addvaccine')}}" class="text-white text-decoration-none">insert vaccine</a></button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

                <tr>

                <th>#</th>
                  <th>v_name</th>
                  <th>Manufactur</th>
                  <th>v_Batch_Num</th>
                  <th>Exp_Date</th>
                  <th>Recommend_Age</th>
                  <th>Dose_Count</th>
                  <th>v_status</th>
                  <th>created_at</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item )
<tr>
<td>{{ $item->v_id }}</td>
<td>{{ $item->v_name }}</td>
<td>{{ $item->v_Manufacturer}}</td>
<td>{{ $item->v_Batch_Number}}</td>
<td>{{ $item->v_Expiration_Date}}</td>
<td>{{ $item->v_Recommended_Age }}</td>
<td>{{ $item->	v_Dose_Count}}</td>
<td>{{ $item->v_status }}</td>
<td>{{ $item->created_at }}</td>
<td><a href="{{ url('/dashboard/editvaccine') }}/{{ $item->v_id }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ url('/dashboard/delete vaccine') }}/{{ $item->v_id }}" class="btn btn-sm btn-danger mt-1">delete</a></td>

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
