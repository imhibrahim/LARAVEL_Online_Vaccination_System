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
              <h3 class="card-title">DataTable All Users</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

                <tr>

                <th class="text-center">#</th>
                  <th class="text-center">User name</th>
                  <th class="text-center">User Mail</th>
                  <th class="text-center">User Pssword</th>
                  <th class="text-center">User Roll</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item )
<tr>
<td class="text-center">{{ $item->uid }}</td>
@if ($item->roll==1)
  <td class="text-center">Admin Mohammad Ibrahim</td>
@else
<td class="text-center">{{ $item->uname }}</td>
@endif

<td class="text-center">{{ $item->uemail }}</td>
<td class="text-center">md5({{$item->upassword}})</td>
@if ( $item->roll==1)
  <td class="text-center text-info fw-bolder disabled">ADMIN</td>
  @else
  <td class="text-center text-warning"> User</td>
    
@endif



<td class="text-center">
  @if ($item->roll==1)
    <a href="{{ url('/dashboard/delete user') }}/{{ $item->uid }}" 
  class="btn btn-sm btn-danger mt-1 disabled">delete</a></td>
  @else
  <a href="{{ url('/dashboard/delete user') }}/{{ $item->uid }}" 
    class="btn btn-sm btn-danger mt-1">delete</a></td>
  @endif


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
