{{-- NON AJAX --}}
@extends('layouts.master1')

@section('title')
    Dashboard
@endsection
@section('header') Dashboard @endsection
@section('desc') Dashboard dari REKAN @endsection
@section('header-2') Dashboard @endsection


@section('content')
<div class="card text-dark">
    <div class="card-deck bg-white">
        <div class="card bg-white">
            <div class="card mb-3 bg-white" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="../admin/assets/img/user.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <a style="text-decoration: none" href="/admin/user"><h5 style="color:black" class="card-title">User</h5></a>
                            <h1 class="card-text">{{ $total_user }}</h1>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-white">
            <div class="card mb-3 bg-white" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="../admin/assets/img/transaksi.png" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                                <a style="text-decoration: none" href="/admin/kode-transaksi"><h5 style="color:black" class="card-title">Kode Transaksi</h5></a>
                            <h1 class="card-text">{{$total_kode_transaksi }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card text-dark bg-primary">
    <div class="card-header text-light">
        <h5>BJBS</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Januari</h5>
                        <h1 style="">{{ $januari_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Februari</h5>
                        <h1 style="">{{ $februari_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Maret</h5>
                        <h1 style="">{{ $maret_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">April</h5>
                        <h1 style="">{{ $april_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Mei</h5>
                        <h1 style="">{{ $mei_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juni</h5>
                        <h1 style="">{{ $juni_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juli</h5>
                        <h1 style="">{{ $juli_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Agustus</h5>
                        <h1 style="">{{ $agustus_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">September</h5>
                        <h1 style="">{{ $september_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Oktober</h5>
                        <h1 style="">{{ $oktober_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Nopember</h5>
                        <h1 style="">{{ $nopember_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Desember</h5>
                        <h1 style="">{{ $desember_bjbs }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Debit</h5>
                        <h1 style="">{{ number_format($total_dbt_bjbs, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Kredit</h5>
                        <h1 style="">{{ number_format($total_kdt_bjbs, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Data BJBS</h5>
                        <h1 style="">{{ $total_bjbs }}</h1>
                        <a href="/admin/bjbs" class="btn btn-primary">Go to BJBS</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="card text-dark bg-secondary">
    <div class="card-header text-light">
        <h5>BJBS H2H</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Januari</h5>
                        <h1 style="">{{ $januari_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Februari</h5>
                        <h1 style="">{{ $februari_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Maret</h5>
                        <h1 style="">{{ $maret_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">April</h5>
                        <h1 style="">{{ $april_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Mei</h5>
                        <h1 style="">{{ $mei_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juni</h5>
                        <h1 style="">{{ $juni_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juli</h5>
                        <h1 style="">{{ $juli_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Agustus</h5>
                        <h1 style="">{{ $agustus_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">September</h5>
                        <h1 style="">{{ $september_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Oktober</h5>
                        <h1 style="">{{ $oktober_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Nopember</h5>
                        <h1 style="">{{ $nopember_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Desember</h5>
                        <h1 style="">{{ $desember_bjbs_h2h }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Debit</h5>
                        <h1 style="">{{ number_format($total_dbt_bjbs_h2h, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Kredit</h5>
                        <h1 style="">{{ number_format($total_kdt_bjbs_h2h, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Data BJBS H2H</h5>
                        <h1 style="">{{ $total_bjbs_h2h }}</h1>
                        <a href="/admin/bjbs-h2h" class="btn btn-primary">Go to BJBS H2H</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="card text-dark bg-success">
    <div class="card-header text-light">
        <h5>BRI</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Januari</h5>
                        <h1 style="">{{ $januari_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Februari</h5>
                        <h1 style="">{{ $februari_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Maret</h5>
                        <h1 style="">{{ $maret_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">April</h5>
                        <h1 style="">{{ $april_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Mei</h5>
                        <h1 style="">{{ $mei_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juni</h5>
                        <h1 style="">{{ $juni_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juli</h5>
                        <h1 style="">{{ $juli_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Agustus</h5>
                        <h1 style="">{{ $agustus_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">September</h5>
                        <h1 style="">{{ $september_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Oktober</h5>
                        <h1 style="">{{ $oktober_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Nopember</h5>
                        <h1 style="">{{ $nopember_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Desember</h5>
                        <h1 style="">{{ $desember_bri }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Debit</h5>
                        <h1 style="">{{ number_format($total_dbt_bri, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Kredit</h5>
                        <h1 style="">{{ number_format($total_kdt_bri, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Data BRI</h5>
                        <h1 style="">{{ $total_bri }}</h1>
                        <a href="/admin/bri" class="btn btn-primary">Go to BRI</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="card text-dark bg-danger">
    <div class="card-header text-light">
        <h5>BRI-Syariah</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Januari</h5>
                        <h1 style="">{{ $januari_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Februari</h5>
                        <h1 style="">{{ $februari_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Maret</h5>
                        <h1 style="">{{ $maret_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">April</h5>
                        <h1 style="">{{ $april_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Mei</h5>
                        <h1 style="">{{ $mei_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juni</h5>
                        <h1 style="">{{ $juni_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juli</h5>
                        <h1 style="">{{ $juli_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Agustus</h5>
                        <h1 style="">{{ $agustus_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">September</h5>
                        <h1 style="">{{ $september_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Oktober</h5>
                        <h1 style="">{{ $oktober_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Nopember</h5>
                        <h1 style="">{{ $nopember_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Desember</h5>
                        <h1 style="">{{ $desember_bris }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Debit</h5>
                        <h1 style="">{{ number_format($total_dbt_bris, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Kredit</h5>
                        <h1 style="">{{ number_format($total_kdt_bris, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Data BRI-Syariah</h5>
                        <h1 style="">{{ $total_bris }}</h1>
                        <a href="/admin/bri-syariah" class="btn btn-primary">Go to BRI-Syariah</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="card text-dark bg-warning">
    <div class="card-header text-light">
        <h5>BSM</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Januari</h5>
                        <h1 style="">{{ $januari_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Februari</h5>
                        <h1 style="">{{ $februari_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Maret</h5>
                        <h1 style="">{{ $maret_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">April</h5>
                        <h1 style="">{{ $april_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Mei</h5>
                        <h1 style="">{{ $mei_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juni</h5>
                        <h1 style="">{{ $juni_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juli</h5>
                        <h1 style="">{{ $juli_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Agustus</h5>
                        <h1 style="">{{ $agustus_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">September</h5>
                        <h1 style="">{{ $september_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Oktober</h5>
                        <h1 style="">{{ $oktober_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Nopember</h5>
                        <h1 style="">{{ $nopember_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Desember</h5>
                        <h1 style="">{{ $desember_bsm }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Debit</h5>
                        <h1 style="">{{ number_format($total_dbt_bsm, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Kredit</h5>
                        <h1 style="">{{ number_format($total_kdt_bsm, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Data BSM</h5>
                        <h1 style="">{{ $total_bsm }}</h1>
                        <a href="/admin/bri-syariah" class="btn btn-primary">Go to BSM</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="card text-dark bg-info">
    <div class="card-header text-light">
        <h5>BTN</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Januari</h5>
                        <h1 style="">{{ $januari_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Februari</h5>
                        <h1 style="">{{ $februari_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Maret</h5>
                        <h1 style="">{{ $maret_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">April</h5>
                        <h1 style="">{{ $april_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Mei</h5>
                        <h1 style="">{{ $mei_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juni</h5>
                        <h1 style="">{{ $juni_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Juli</h5>
                        <h1 style="">{{ $juli_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Agustus</h5>
                        <h1 style="">{{ $agustus_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">September</h5>
                        <h1 style="">{{ $september_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Oktober</h5>
                        <h1 style="">{{ $oktober_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Nopember</h5>
                        <h1 style="">{{ $nopember_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Desember</h5>
                        <h1 style="">{{ $desember_btn }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Debit</h5>
                        <h1 style="">{{ number_format($total_dbt_btn, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Total Kredit</h5>
                        <h1 style="">{{ number_format($total_kdt_btn, 0, '', '.') }}</h1>
                    </div>
                </div>
            </div>
    
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="color:black;">Data BTN</h5>
                        <h1 style="">{{ $total_btn }}</h1>
                        <a href="/admin/btn" class="btn btn-primary">Go to BTN</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
<div class="card text-dark bg-dark">
        <div class="card-header text-light">
            <h5>TOTAL KESELURUHAN REKENING KORAN</h5>
        </div>
        <div class="card-body">
            <div class="row">
                
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black;">Total Debit</h5>
                            <h1 style="">{{ number_format($all_dbt, 0, '', '.') }}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black;">Total Kredit</h5>
                            <h1 style="">{{ number_format($total_kdt_bjbs, 0, '', '.') }}</h1>
                        </div>
                    </div>
                </div>
        
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="color:black;">Data Keseluruhan</h5>
                            <h1 style="">{{ $all_data }}</h1>
                        </div>
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