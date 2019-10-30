{{-- NON AJAX --}}
@extends('layouts.master1')

@section('title')
    BTN
@endsection
@section('header') BTN @endsection

@section('desc') Kumpulan data BTN bulan September @endsection
@section('header-2') BTN @endsection


@section('content')

  <div class="text-center">
    <a href="/admin/btn-januari" class="btn btn-info" role="button">Januari</a>&nbsp;
    <a href="/admin/btn-februari" class="btn btn-info" role="button">Februari</a>&nbsp;
    <a href="/admin/btn-maret" class="btn btn-info" role="button">Maret</a>&nbsp;
    <a href="/admin/btn-april" class="btn btn-info" role="button">April</a>&nbsp;
    <a href="/admin/btn-mei" class="btn btn-info" role="button">Mei</a>&nbsp;
    <a href="/admin/btn-juni" class="btn btn-info" role="button">Juni</a>&nbsp;
    <a href="/admin/btn-juli" class="btn btn-info" role="button">Juli</a>&nbsp;
    <a href="/admin/btn-agustus" class="btn btn-info" role="button">Agustus</a>&nbsp;
    <a href="/admin/btn-september" class="btn btn-info active" role="button">September</a>&nbsp;
    <a href="/admin/btn-oktober" class="btn btn-info" role="button">Oktober</a>&nbsp;
    <a href="/admin/btn-nopember" class="btn btn-info" role="button">Nopember</a>&nbsp;
    <a href="/admin/btn-desember" class="btn btn-info" role="button">Desember</a>
  </div>
  <br>
  <form class="form-inline" action="/admin/btn-september" method="GET">
  <div class="form-group">
      <input class="form-control" type="text" name="cari" placeholder="Masukan tanggal saja . .">&nbsp;
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
                  <th class="bg-white" style="color:black">Waktu Posting</th>
                  <th class="bg-white" style="color:black">Debit</th>
                  <th class="bg-white" style="color:black">Kredit</th>
                  <th class="bg-white" style="color:black">Saldo</th>
                  <th class="bg-white" style="color:black">Kode Transaksi</th>
                </tr>
              </thead>
              <tbody></tbody>
              <tbody>
                @foreach($september as $data)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $data->tanggal_1 }}</td>
                        <td>{{ $data->tanggal_2 }}</td>
                        <td>{{ $data->remark }}</td>
                        <td>{{ $data->waktu_posting }}</td>
                        <td>Rp.{{ number_format($data->debit, 0, '', '.') }}</td>
                        <td>Rp.{{ number_format($data->kredit, 0, '', '.') }}</td>
                        <td>Rp.{{ number_format($data->saldo, 0, '', '.') }}</td>
                        <td>{{ $data->kode_transaksi->nama }} ({{ $data->kode_transaksi_id }})</td>
                    </tr>
                @endforeach
              </tbody>
            </table>
              {{ $september->links() }}
          </div>
          <br>
        </div>
            <div align="right">
                <h5 style="color:black">Data Per Halaman : {{ $september->perPage() }} <br/></h5>
                <h5 style="color:black">Jumlah Data : {{ number_format($september->total(), 0, '', '.') }} <br/></h5>
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