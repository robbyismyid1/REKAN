{{-- NON AJAX --}}
@extends('layouts.master1')

@section('title')
    Users
@endsection
@section('header') Users @endsection
@section('button-add')
    <div class="section-header-button">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-user">Tambah Data</button>
    </div>
@endsection
@section('desc') Manage Users @endsection
@section('header-2') Users @endsection


@section('content')

<form class="form-inline" action="/admin/user" method="GET">
  <div class="form-group">
    <input class="form-control" type="text" name="cari" placeholder="Cari data ..">&nbsp;
    <button type="submit" class="btn bg-success"><li class="fa fa-search"></li></button>&nbsp;
  </div>
</form>
<br>

    <div class="card">        
          <div class="table-responsive">
            <table class="table table-bordered" id="table-1">
              <thead>
                <tr>
                  <th class="text-center bg-white" style="color:black">
                    #
                  </th>
                  <th class="bg-white" style="color:black">Name</th>
                  <th class="bg-white" style="color:black">Username</th>
                  <th class="bg-white" style="color:black">Email</th>
                  <th class="bg-white" style="color:black">Created at</th>
                  <th class="bg-white" style="color:black">Action</th>
                </tr>
              </thead>
              <tbody></tbody>
              <tbody>
                @foreach($user as $data)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->created_at }}</td>
                        <td >
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-user" 
                            data-id="{{ $data->id }}" 
                            data-name="{{ $data->name }}" 
                            data-username="{{ $data->username }}" 
                            data-email="{{ $data->email }}" 
                            data-created_at="{{ $data->created_at }}" >
                            <i class="fa fa-pen"></i></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-user" 
                            data-id="{{ $data->id }}" 
                            data-name="{{ $data->name }}" 
                            data-username="{{ $data->username }}" 
                            data-email="{{ $data->email }}"
                            data-created_at="{{ $data->created_at }}">
                            <i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
              {{-- {{ $user->links() }} --}}
          </div>
          <br>
        </div>
            <div align="right">
                {{-- <h5 style="color:black">Data Per Halaman : {{ $user->perPage() }} <br/></h5>
                <h5 style="color:black">Jumlah Data : {{ number_format($user->total(), 0, '', '.') }} <br/></h5> --}}
            </div>
      </div>
@endsection 

@section('script')
    <script src="{{ asset('admin/assets/modules/jquery.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/popper.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/tooltip.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/moment.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/stisla.js')}}"></script>

    <!-- JS Libraies -->
    {{-- <script src="{{ asset('admin/assets/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('admin/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script> --}}
    <script src="{{ asset('admin/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('admin/assets/js/page/modules-toastr.js') }}"></script>
    <script src="{{ asset('admin/assets/modules/izitoast/js/iziToast.min.js')}}"></script>

    <!-- Page Specific JS File -->
    {{-- <script src="{{ asset('admin/assets/js/page/modules-datatables.js')}}"></script> --}}

    <!-- Template JS File -->
    <script src="{{ asset('admin/assets/js/scripts.js')}}"></script>
    <script src="{{ asset('admin/assets/js/custom.js')}}"></script>
@endsection

@section('css')
    <!-- General CSS Files -->
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/fontawesome/css/all.min.css')}}">

    <!-- CSS Libraries -->
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/izitoast/css/iziToast.min.css')}}">
        {{-- <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/datatables.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css')}}"> --}}

    <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('admin/assets/css/components.css')}}">
@endsection