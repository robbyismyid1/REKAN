{{-- NON AJAX --}}
@extends('layouts.master1')

@section('title')
    BRI
@endsection
@section('header') BRI @endsection

@section('desc') Kumpulan data rekap BRI @endsection
@section('header-2') BRI @endsection


@section('content')

<form class="form-inline" action="/admin/bri-rekap-tahun" method="GET">
  <div class="form-group">
    <input class="form-control" type="text" name="cari" placeholder="Cari data ..">&nbsp;
    <button type="submit" class="btn bg-success"><li class="fa fa-search"></li></button>&nbsp;
    <a style="color:black" href="/admin/bri-rekap-tahun" class="btn bg-warning" role="button" aria-pressed="true"><li class="fas fa-arrow-left"></li></li></a>
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
                <th class="text-center bg-white" style="color:black">Kode</th>
                <th class="text-center bg-white" style="color:black">Nama Kode</th>
                <th class="text-center bg-white" style="color:black">Banyak Transaksi</th>
                <th class="text-center bg-white" style="color:black">Debit</th>
                <th class="text-center bg-white" style="color:black">Kredit</th>
              </tr>
            </thead>
            <tbody>
            <tbody>
              @foreach($kode_transaksi_id as $data)
                  <tr>
                      <td class="text-center">
                          {{ $loop->iteration }}
                      </td>
                      <td>{{ $data->nama }}</td>
                      <td>{{ $data->nama_kt }}</td>
                      
                      <?php 
                      $hitung = DB::table('kode_transaksis')->selectRaw('count(bri_data.kode_transaksi_id) AS jml_count')
                      ->join('bri_data','bri_data.kode_transaksi_id','=','kode_transaksis.id')
                      ->where('kode_transaksi_id', '=', $data->id)
                      ->get();

                      $debit = DB::table('kode_transaksis')->selectRaw('sum(bri_data.debit) AS jml_debit')
                      ->join('bri_data','bri_data.kode_transaksi_id','=','kode_transaksis.id')
                      ->where('kode_transaksi_id', '=', $data->id)
                      ->get();

                      $kredit = DB::table('kode_transaksis')->selectRaw('sum(bri_data.kredit) AS jml_kredit')
                      ->join('bri_data','bri_data.kode_transaksi_id','=','kode_transaksis.id')
                      ->where('kode_transaksi_id', '=', $data->id)
                      ->get();
                      ?>

                      @foreach ($hitung as $jml)
                        <td class="text-right"> {{ $jml->jml_count }}</td>
                      @endforeach
                      @foreach($debit as $data2)
                        <td class="text-right">Rp. {{ number_format($data2->jml_debit, 0, '', '.') }}</td>
                      @endforeach
                      @foreach($kredit as $data3)
                        <td class="text-right">Rp. {{ number_format($data3->jml_kredit, 0, '', '.') }}</td>
                      @endforeach
                  </tr>
              @endforeach
              <th class="bg-white"></th>
              <th class="bg-white">Total keseluruhan : </th>
              <th class="bg-white"></th>
              <th class="text-right bg-white" style="color:red">[ {{ $count }} ]</th>
              <th class="text-right bg-white" style="color:red">[ Rp. {{ number_format($sum_debit, 0, '', '.') }} ]</th>
              <th class="text-right bg-white" style="color:red">[ Rp. {{ number_format($sum_kredit, 0, '', '.') }} ]</th>
            </tbody>
          </table>
              {{-- {{ $kode_transaksi_id->links() }} --}}
          </div>
          <br>
        </div>
            <div align="right">
                {{-- <h5 style="color:black">Data Per Halaman : {{ $kode_transaksi_id->perPage() }} <br/></h5> --}}
                {{-- <h5 style="color:black">Jumlah Data : {{ number_format($kode_transaksi_id->total(), 0, '', '.') }} <br/></h5> --}}
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