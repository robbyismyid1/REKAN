{{-- NON AJAX --}}
@extends('layouts.master')

@section('title')
    Kode Transaksi
@endsection
@section('header') Kode Transaksi @endsection
@section('button-add')
    <div class="section-header-button">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-transaksi">Tambah Data</button>
    </div>
@endsection
@section('desc') Kumpulan data Kode Transaksi @endsection
@section('header-2') Kode Transaksi @endsection


@section('content')

<form class="form-inline" action="/admin/kode-transaki" method="GET">
  <div class="form-group">
    <input class="form-control" type="text" name="keyword" placeholder="Cari data ..">&nbsp;
    <button type="submit" class="btn bg-warning"><li class="fa fa-search"></li></button>&nbsp;
    <a class="btn bg-success" href="{{ url('admin/kode-transaksi') }}"><li class="fa fa-spinner fa-spin"></li></a>
  </div>
</form>
<br>

    <div class="card">        
          <div class="table-responsive">
            <table class="table table-bordered" id="table-1">
              <thead>
                <tr>
                  <th class="text-center bg-info" class="text-center" style="color:black">
                    ID
                  </th>
                  <th class="bg-info" style="color:black">Kode Transaksi</th>
                  <th class="bg-info" style="color:black">Nama</th>
                  <th class="bg-info" style="color:black">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($kode_transaksi_id as $data)
                    <tr>
                        <td class="text-center">
                            {{ $data->id }}
                        </td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nama_kt }}</td>
                        <td >
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-transaksi" 
                            data-id="{{ $data->id }}" 
                            data-nama="{{ $data->nama }}" 
                            data-nama_kt="{{ $data->nama_kt }}">
                            <i class="fa fa-pen"></i></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-transaksi" 
                            data-id="{{ $data->id }}" 
                            data-nama="{{ $data->nama }}" 
                            data-nama_kt="{{ $data->nama_kt }}">
                            <i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
              {{ $kode_transaksi_id->links() }}
          </div>
          <br>
        </div>
            <div align="right">
                <h5 style="color:black">Data Per Halaman : {{ $kode_transaksi_id->perPage() }} <br/></h5>
                <h5 style="color:black">Jumlah Data : {{ number_format($kode_transaksi_id->total(), 0, '', '.') }} <br/></h5>
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