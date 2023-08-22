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
              <h3 class="card-title">DataTable All Hospitals</h3>
              <button class="btn btn-outline-dark float-end"><a href="{{url('/dashboard/hospital/addhospital')}}" class="text-white text-decoration-none">insert Hospital</a></button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

                <tr>

                <th>#</th>
                  <th>h_name</th>
                  <th>h_city</th>
                  <th>h_pnumber</th>
                  <th>h_email</th>
                  <th>h_website</th>
                  <th>h_address</th>
                  <th>h_pic</th>
                  <th>h_status</th>

                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item )
<tr>
<td>{{ $item->hid }}</td>
<td>{{ $item->hname }}</td>
<td>{{ $item->hcity }}</td>
<td>{{ $item->hpnumber }}</td>
<td>{{ $item->hemail }}</td>
<td>{{ $item->hwebsite}}</td>
<td>{{ $item->haddress }}</td>
<td><img src="{{ url('/') }}/{{ $item->h_pic }}" height="50px" width="80px"></td>
<td>{{ $item->	hstatus }}</td>

<td><a href="{{ url('/dashboard/edithospital') }}/{{ $item->hid }}" class="btn btn-sm btn-info">Edit</a>
<a href="{{ url('/dashboard/deletehospital') }}/{{ $item->hid }}" class="btn btn-sm btn-danger mt-1">delete</a></td>

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
