{{-- NON AJAX --}}
@extends('layouts.master1')

@section('title')
    BSM Landing Page
@endsection
@section('header') BSM @endsection
@section('desc') Landing page BSM @endsection
@section('header-2') BSM @endsection


@section('content')


<br>

<div class="row">
        <div class="col-sm-6">
                <div class="card bg-light">
                    <img src="{{ asset('admin/assets/img/bg-green.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 style="color:black" class="card-title"><center>Index BSM</center></h5>
                    <p class="card-text">Yang isinya adalah kumpulan seluruh data BSM</p>
                        <div class="card-deck">
                            <div class="card">
                              
                              <div class="card-body">
                                <h5 style="color:black" class="card-title">Perbulan</h5>
                                <p class="card-text">Index BSM perbulan</p>
                                <ul>
                                  <li><a href="/admin/bsm-januari">Januari</a></li>
                                  <li><a href="/admin/bsm-februari">Februari</a></li>
                                  <li><a href="/admin/bsm-maret">Maret</a></li>
                                  <li><a href="/admin/bsm-april">April</a></li>
                                  <li><a href="/admin/bsm-mei">Mei</a></li>
                                  <li><a href="/admin/bsm-juni">Juni</a></li>
                                  <li><a href="/admin/bsm-juli">Juli</a></li>
                                  <li><a href="/admin/bsm-agustus">Agustus</a></li>
                                  <li><a href="/admin/bsm-september">September</a></li>
                                  <li><a href="/admin/bsm-oktober">Oktober</a></li>
                                  <li><a href="/admin/bsm-nopember">Nopember</a></li>
                                  <li><a href="/admin/bsm-desember">Desember</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="card">
                              
                              <div class="card-body">
                                <h5 style="color:black" class="card-title">Pertahun</h5>
                                <p class="card-text">Index BSM pertahun</p>
                                <a href="/admin/bsm" class="btn btn-primary">Go</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        <div class="col-sm-6">
            <div class="card bg-light">
                <img src="{{ asset('admin/assets/img/bg-green.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 style="color:black" class="card-title"><center>Rekap BSM</center></h5>
                <p class="card-text">Yang isinya adalah kumpulan rekap data BSM</p>
                    <div class="card-deck">
                        
                        <div class="card">
                          
                          <div class="card-body">
                            <h5 style="color:black" class="card-title">Pertahun</h5>
                            <p class="card-text">Rekap data BSM pertahun</p>
                            <a href="/admin/bsm-rekap-tahun" class="btn btn-primary">Go</a>
                          </div>
                        </div>
                    </div>
                </div>
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