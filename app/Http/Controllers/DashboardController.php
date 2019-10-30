<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\KodeTransaksi;
use App\BjbsData;
use App\Bjbsh2hData;
use App\BriData;
use App\BrisData;
use App\BsmData;
use App\BtnData;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_user = User::count();
        $total_kode_transaksi = KodeTransaksi::count();

        $januari_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-01%')->count();
        $februari_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-02%')->count();
        $maret_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-03%')->count();
        $april_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-04%')->count();
        $mei_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-05%')->count();
        $juni_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-06%')->count();
        $juli_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-07%')->count();
        $agustus_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-08%')->count();
        $september_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-09%')->count();
        $oktober_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-10%')->count();
        $nopember_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-11%')->count();
        $desember_bjbs = BjbsData::where('tanggal_1', 'like', '%2019-12%')->count();
        $total_dbt_bjbs = BjbsData::sum('debit');
        $total_kdt_bjbs = BjbsData::sum('kredit');
        $total_bjbs = BJbsData::count();

        $januari_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-01%')->count();
        $februari_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-02%')->count();
        $maret_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-03%')->count();
        $april_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-04%')->count();
        $mei_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-05%')->count();
        $juni_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-06%')->count();
        $juli_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-07%')->count();
        $agustus_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-08%')->count();
        $september_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-09%')->count();
        $oktober_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-10%')->count();
        $nopember_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-11%')->count();
        $desember_bjbs_h2h = Bjbsh2hData::where('tanggal_1', 'like', '%2019-12%')->count();
        $total_dbt_bjbs_h2h = Bjbsh2hData::sum('debit');
        $total_kdt_bjbs_h2h = Bjbsh2hData::sum('kredit');
        $total_bjbs_h2h = BJbsh2hData::count();

        $januari_bri = BriData::where('tanggal_1', 'like', '%2019-01%')->count();
        $februari_bri = BriData::where('tanggal_1', 'like', '%2019-02%')->count();
        $maret_bri = BriData::where('tanggal_1', 'like', '%2019-03%')->count();
        $april_bri = BriData::where('tanggal_1', 'like', '%2019-04%')->count();
        $mei_bri = BriData::where('tanggal_1', 'like', '%2019-05%')->count();
        $juni_bri = BriData::where('tanggal_1', 'like', '%2019-06%')->count();
        $juli_bri = BriData::where('tanggal_1', 'like', '%2019-07%')->count();
        $agustus_bri = BriData::where('tanggal_1', 'like', '%2019-08%')->count();
        $september_bri = BriData::where('tanggal_1', 'like', '%2019-09%')->count();
        $oktober_bri = BriData::where('tanggal_1', 'like', '%2019-10%')->count();
        $nopember_bri = BriData::where('tanggal_1', 'like', '%2019-11%')->count();
        $desember_bri = BriData::where('tanggal_1', 'like', '%2019-12%')->count();
        $total_dbt_bri = BriData::sum('debit');
        $total_kdt_bri = BriData::sum('kredit');
        $total_bri = BriData::count();

        $januari_bris = BrisData::where('tanggal_1', 'like', '%2019-01%')->count();
        $februari_bris = BrisData::where('tanggal_1', 'like', '%2019-02%')->count();
        $maret_bris = BrisData::where('tanggal_1', 'like', '%2019-03%')->count();
        $april_bris = BrisData::where('tanggal_1', 'like', '%2019-04%')->count();
        $mei_bris = BrisData::where('tanggal_1', 'like', '%2019-05%')->count();
        $juni_bris = BrisData::where('tanggal_1', 'like', '%2019-06%')->count();
        $juli_bris = BrisData::where('tanggal_1', 'like', '%2019-07%')->count();
        $agustus_bris = BrisData::where('tanggal_1', 'like', '%2019-08%')->count();
        $september_bris = BrisData::where('tanggal_1', 'like', '%2019-09%')->count();
        $oktober_bris = BrisData::where('tanggal_1', 'like', '%2019-10%')->count();
        $nopember_bris = BrisData::where('tanggal_1', 'like', '%2019-11%')->count();
        $desember_bris = BrisData::where('tanggal_1', 'like', '%2019-12%')->count();
        $total_dbt_bris = BrisData::sum('debit');
        $total_kdt_bris = BrisData::sum('kredit');
        $total_bris = BrisData::count();

        $januari_bsm = BsmData::where('tanggal_1', 'like', '%2019-01%')->count();
        $februari_bsm = BsmData::where('tanggal_1', 'like', '%2019-02%')->count();
        $maret_bsm = BsmData::where('tanggal_1', 'like', '%2019-03%')->count();
        $april_bsm = BsmData::where('tanggal_1', 'like', '%2019-04%')->count();
        $mei_bsm = BsmData::where('tanggal_1', 'like', '%2019-05%')->count();
        $juni_bsm = BsmData::where('tanggal_1', 'like', '%2019-06%')->count();
        $juli_bsm = BsmData::where('tanggal_1', 'like', '%2019-07%')->count();
        $agustus_bsm = BsmData::where('tanggal_1', 'like', '%2019-08%')->count();
        $september_bsm = BsmData::where('tanggal_1', 'like', '%2019-09%')->count();
        $oktober_bsm = BsmData::where('tanggal_1', 'like', '%2019-10%')->count();
        $nopember_bsm = BsmData::where('tanggal_1', 'like', '%2019-11%')->count();
        $desember_bsm = BsmData::where('tanggal_1', 'like', '%2019-12%')->count();
        $total_dbt_bsm = BsmData::sum('debit');
        $total_kdt_bsm = BsmData::sum('kredit');
        $total_bsm = BsmData::count();

        $januari_btn = BtnData::where('tanggal_1', 'like', '%2019-01%')->count();
        $februari_btn = BtnData::where('tanggal_1', 'like', '%2019-02%')->count();
        $maret_btn = BtnData::where('tanggal_1', 'like', '%2019-03%')->count();
        $april_btn = BtnData::where('tanggal_1', 'like', '%2019-04%')->count();
        $mei_btn = BtnData::where('tanggal_1', 'like', '%2019-05%')->count();
        $juni_btn = BtnData::where('tanggal_1', 'like', '%2019-06%')->count();
        $juli_btn = BtnData::where('tanggal_1', 'like', '%2019-07%')->count();
        $agustus_btn = BtnData::where('tanggal_1', 'like', '%2019-08%')->count();
        $september_btn = BtnData::where('tanggal_1', 'like', '%2019-09%')->count();
        $oktober_btn = BtnData::where('tanggal_1', 'like', '%2019-10%')->count();
        $nopember_btn = BtnData::where('tanggal_1', 'like', '%2019-11%')->count();
        $desember_btn = BtnData::where('tanggal_1', 'like', '%2019-12%')->count();
        $total_dbt_btn = BtnData::sum('debit');
        $total_kdt_btn = BtnData::sum('kredit');
        $total_btn = BtnData::count();

        $all_dbt = $total_dbt_bjbs + $total_dbt_bjbs_h2h + $total_dbt_bri + $total_dbt_bris 
        + $total_dbt_bsm + $total_dbt_btn;
        $all_kdt = $total_kdt_bjbs + $total_kdt_bjbs_h2h + $total_kdt_bri + $total_kdt_bris 
        + $total_kdt_bsm + $total_kdt_btn;
        $all_data = $total_bjbs + $total_bjbs_h2h + $total_bri + $total_bris + $total_bsm 
        + $total_bsm + $total_btn;

        return view('backend.dashboard', compact('total_user', 'total_kode_transaksi', 'januari_bjbs', 'februari_bjbs', 'maret_bjbs', 
        'april_bjbs', 'mei_bjbs', 'juni_bjbs', 'juli_bjbs', 'agustus_bjbs', 'september_bjbs', 
        'oktober_bjbs', 'nopember_bjbs', 'desember_bjbs', 'total_dbt_bjbs', 'total_kdt_bjbs', 
        'total_bjbs', 'januari_bjbs_h2h', 'februari_bjbs_h2h', 'maret_bjbs_h2h', 'april_bjbs_h2h', 
        'mei_bjbs_h2h', 'juni_bjbs_h2h', 'juli_bjbs_h2h', 'agustus_bjbs_h2h', 'september_bjbs_h2h', 
        'oktober_bjbs_h2h', 'nopember_bjbs_h2h', 'desember_bjbs_h2h', 'total_dbt_bjbs_h2h', 
        'total_kdt_bjbs_h2h', 'total_bjbs_h2h', 'januari_bri', 'februari_bri', 'maret_bri', 
        'april_bri', 'mei_bri', 'juni_bri', 'juli_bri', 'agustus_bri', 'september_bri', 
        'oktober_bri', 'nopember_bri', 'desember_bri', 'total_dbt_bri', 'total_kdt_bri', 
        'total_bri', 'januari_bris', 'februari_bris', 'maret_bris', 
        'april_bris', 'mei_bris', 'juni_bris', 'juli_bris', 'agustus_bris', 'september_bris', 
        'oktober_bris', 'nopember_bris', 'desember_bris', 'total_dbt_bris', 'total_kdt_bris', 
        'total_bris', 'januari_bsm', 'februari_bsm', 'maret_bsm', 
        'april_bsm', 'mei_bsm', 'juni_bsm', 'juli_bsm', 'agustus_bsm', 'september_bsm', 
        'oktober_bsm', 'nopember_bsm', 'desember_bsm', 'total_dbt_bsm', 'total_kdt_bsm', 
        'total_bsm', 'januari_btn', 'februari_btn', 'maret_btn', 
        'april_btn', 'mei_btn', 'juni_btn', 'juli_btn', 'agustus_btn', 'september_btn', 
        'oktober_btn', 'nopember_btn', 'desember_btn', 'total_dbt_btn', 'total_kdt_btn', 
        'total_btn', 'all_dbt', 'all_kdt', 'all_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
