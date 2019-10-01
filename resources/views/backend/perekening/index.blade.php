{{-- NON AJAX --}}
@extends('layouts.master')

@section('title')
    TAMPILKAN PEREKENING
@endsection
@section('header') TAMPILKAN PEREKENING @endsection
{{-- @section('button-add')
    <div class="section-header-button">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create-bris">Tambah Data</button>
    </div>
@endsection --}}
@section('desc') Menampilkan data perekening @endsection
@section('header-2') Perekening @endsection


@section('content')

<form class="form-inline" action="/admin/perekening" method="GET">
  <div class="form-group">
    <input class="form-control" type="text" name="keyword" placeholder="Cari data ..">&nbsp;
    <button type="submit" class="btn bg-warning"><li class="fa fa-search"></li></button>&nbsp;
    <a class="btn bg-success" href="{{ url('admin/perekening') }}"><li class="fa fa-spinner fa-spin"></li></a>
  </div>
</form>
<br>

    <div class="card">        
          <div class="table-responsive">
            <table class="table table-bordered" id="table-1">
              <thead>
                <tr>
                  <th class="bg-info" class="text-center" style="color:black">
                    #
                  </th>
                  <th class="bg-info" style="color:black">Tanggal(1)</th>
                  <th class="bg-info" style="color:black">Tanggal(2)</th>
                  <th class="bg-info" style="color:black">Remark</th>
                  <th class="bg-info" style="color:black">Kode Rekening Bank</th>
                  <th class="bg-info" style="color:black">Kredit</th>
                  <th class="bg-info" style="color:black">Debit</th>
                  <th class="bg-info" style="color:black">Saldo</th>
                  <th class="bg-info" style="color:black">Kode Rekening</th>
                  {{-- <th class="bg-info" style="color:black">Action</th> --}}
                </tr>
              </thead>
              <tbody>
                @foreach($bris as $data)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $data->tanggal_1 }}</td>
                        <td>{{ $data->tanggal_2 }}</td>
                        <td>{{ $data->remark }}</td>
                        <td>{{ $data->kode_rekening_bank }}</td>
                        <td>Rp.{{ number_format($data->kredit, 0, '', '.') }}</td>
                        <td>Rp.{{ number_format($data->debit, 0, '', '.') }}</td>
                        <td>Rp.{{ number_format($data->saldo, 0, '', '.') }}</td>
                        <td>{{ $data->kode_rekening->nama }} ({{ $data->kode_rekening_id }})</td>
                        {{-- <td >
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#edit-bris" data-id="{{ $data->id }}" data-no_urut="{{ $data->no_urut }}" data-tanggal_1="{{ $data->tanggal_1 }}" data-tanggal_2="{{ $data->tanggal_2 }}" data-remark="{{ $data->remark }}" data-kode_rekening_bank="{{ $data->kode_rekening_bank }}" data-kredit="{{ $data->kredit }}" data-debit="{{ $data->debit }}" data-saldo="{{ $data->saldo }}" data-kode_rekening_id="{{ $data->kode_rekening->nama }}"><i class="fa fa-pen"></i></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete-bris" data-id="{{ $data->id }}" data-no_urut="{{ $data->no_urut }}" data-tanggal_1="{{ $data->tanggal_1 }}" data-tanggal_2="{{ $data->tanggal_2 }}" data-remark="{{ $data->remark }}" data-kode_rekening_bank="{{ $data->kode_rekening_bank }}" data-kredit="{{ $data->kredit }}" data-debit="{{ $data->debit }}" data-saldo="{{ $data->saldo }}" data-kode_rekening_id="{{ $data->kode_rekening->nama }}"><i class="fa fa-trash"></i></button>
                        </td> --}}
                    </tr>
                @endforeach
              </tbody>
            </table>
              {{ $bris->links() }}
          </div>
          <br>
        </div>
            <div align="right">
                <h5 style="color:black">Data Per Halaman : {{ $bris->perPage() }} <br/></h5>
                <h5 style="color:black">Jumlah Data : {{ number_format($bris->total(), 0, '', '.') }} <br/></h5>
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