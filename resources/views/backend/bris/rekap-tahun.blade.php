{{-- NON AJAX --}}
@extends('layouts.master1')

@section('title')
    BRI-Syariah
@endsection
@section('header') BRI-Syariah @endsection

@section('desc') Kumpulan data rekap BRI-Syariah @endsection
@section('header-2') BRI-Syariah @endsection


@section('content')

<form class="form-inline" action="/admin/bri-syariah-rekap-tahun" method="GET">
  <div class="form-group">
    <input class="form-control" type="text" name="cari" placeholder="Cari data ..">&nbsp;
    <button type="submit" class="btn bg-success"><li class="fa fa-search"></li></button>&nbsp;
    <a style="color:black" href="/admin/bri-syariah-rekap-tahun" class="btn bg-warning" role="button" aria-pressed="true"><li class="fas fa-arrow-left"></li></li></a>
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
                        <th class="bg-white" style="color:black">Kode x Jumlah Data</th>
                        <th class="bg-white" style="color:black">Nama Kode</th>
                        <th class="bg-white" style="color:black">Debit</th>
                        <th class="bg-white" style="color:black">Kredit</th>
                    </tr>
                </thead>
              <tbody>
                @foreach($kode_transaksi_id as $data)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nama_kt }}</td>
                        <td>Rp.{{ number_format($data->debit, 0, '', '.') }}</td>
                        <td>Rp.{{ number_format($data->kredit, 0, '', '.') }}</td>
                    </tr>
                @endforeach
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