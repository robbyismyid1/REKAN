{{-- NON AJAX --}}
@extends('layouts.master')

@section('title')
    BRI
@endsection
@section('header') BRI @endsection
@section('button-add')
    <div class="section-header-button">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-bri">Tambah Data</button>
    </div>
@endsection
@section('desc') Kumpulan data BRI @endsection
@section('header-2') BRI @endsection


@section('content')

<form class="form-inline" action="/admin/bri" method="GET">
  <div class="form-group">
    <input class="form-control" type="text" name="keyword" placeholder="Cari data ..">&nbsp;
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
                  <th class="bg-white" style="color:black">Tanggal(1)</th>
                  <th class="bg-white" style="color:black">Tanggal(2)</th>
                  <th class="bg-white" style="color:black">Remark</th>
                  <th class="bg-white" style="color:black">Kode Teller</th>
                  <th class="bg-white" style="color:black">Debit</th>
                  <th class="bg-white" style="color:black">Kredit</th>
                  <th class="bg-white" style="color:black">Saldo</th>
                  <th class="bg-white" style="color:black">Kode Transaksi</th>
                  <th class="bg-white" style="color:black">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($bri as $data)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $data->tanggal_1 }}</td>
                        <td>{{ $data->tanggal_2 }}</td>
                        <td>{{ $data->remark }}</td>
                        <td>{{ $data->kode_teller }}</td>
                        <td>Rp.{{ number_format($data->debit, 0, '', '.') }}</td>
                        <td>Rp.{{ number_format($data->kredit, 0, '', '.') }}</td>
                        <td>Rp.{{ number_format($data->saldo, 0, '', '.') }}</td>
                        <td>{{ $data->kode_transaksi->nama }} ({{ $data->kode_transaksi_id }})</td>
                        <td >
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-bri" 
                            data-id="{{ $data->id }}" 
                            data-no_urut="{{ $data->no_urut }}" 
                            data-tanggal_1="{{ $data->tanggal_1 }}" 
                            data-tanggal_2="{{ $data->tanggal_2 }}" 
                            data-remark="{{ $data->remark }}" 
                            data-kode_teller="{{ $data->kode_teller }}" 
                            data-debit="{{ $data->debit }}" 
                            data-kredit="{{ $data->kredit }}" 
                            data-saldo="{{ $data->saldo }}" 
                            data-kode_transaksi_id="{{ $data->kode_transaksi->nama }}">
                            <i class="fa fa-pen"></i></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-bri" 
                            data-id="{{ $data->id }}" 
                            data-no_urut="{{ $data->no_urut }}" 
                            data-tanggal_1="{{ $data->tanggal_1 }}" 
                            data-tanggal_2="{{ $data->tanggal_2 }}" 
                            data-remark="{{ $data->remark }}" 
                            data-kode_teller="{{ $data->kode_teller }}" 
                            data-debit="{{ $data->debit }}" 
                            data-kredit="{{ $data->kredit }}" 
                            data-saldo="{{ $data->saldo }}" 
                            data-kode_transaksi_id="{{ $data->kode_transaksi->nama }}">
                            <i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
              {{ $bri->links() }}
          </div>
          <br>
        </div>
            <div align="right">
                <h5 style="color:black">Data Per Halaman : {{ $bri->perPage() }} <br/></h5>
                <h5 style="color:black">Jumlah Data : {{ number_format($bri->total(), 0, '', '.') }} <br/></h5>
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