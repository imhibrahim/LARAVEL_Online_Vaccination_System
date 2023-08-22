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
              <h3 class="card-title">DataTable All Doctors</h3>
              <button class="btn btn-outline-dark float-end"><a href="{{url('/dashboard/doctor/adddoctor')}}" class="text-white text-decoration-none">insert Doctors</a></button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>D_name</th>
                  <th>d_Specialization</th>
                  <th>dgander</th>
                  <th>d_pic</th>
                  <th>dpnumber</th>
                  <th>demail</th>
                  <th>Hospital</th>
                  <th>dstatus</th>
                  <th>created_at</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item )
<tr>
<td>{{ $item->did }}</td>
<td>{{ $item->dname }}</td>
<td>{{ $item->d_Specialization }}</td>
<td>{{ $item->dgander }}</td>
<td><img src="{{ url('/') }}/{{ $item->d_pic }}" height="50px" width="80px"></td>
<td>{{ $item->dpnumber }}</td>
<td>{{ $item->demail}}</td>
<td>{{ $item->hname }}</td>
<td>{{ $item->	dstatus }}</td>
<td>{{ $item->created_at }}</td>
<td><a href="{{ url('/dashboard/editdoctor') }}/{{ $item->did }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ url('/dashboard/delete doctor') }}/{{ $item->did }}" class="btn btn-sm btn-danger mt-1">delete</a></td>

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
