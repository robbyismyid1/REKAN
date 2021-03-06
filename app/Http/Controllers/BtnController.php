<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\BtnData;
use App\KodeTransaksi;
use Session;

class BtnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $btn = BtnData::all();
        $response = [
            'success' => true,
            'data' => $btn,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function home()
    {
        return view('backend.btn.home');
    }

    public function index(Request $request)
    {
        $btndata = BtnData::all();
        $kode_transaksi_id = KodeTransaksi::all(); 
        $btn = BtnData::when($request->keyword, function ($query) use ($request) {
            $query->where('no_urut', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_1', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_2', 'like', "%{$request->keyword}%")
                ->orWhere('remark', 'like', "%{$request->keyword}%")
                ->orWhere('waktu_posting', 'like', "%{$request->keyword}%")
                ->orWhere('debit', 'like', "%{$request->keyword}%")
                ->orWhere('kredit', 'like', "%{$request->keyword}%")
                ->orWhere('saldo', 'like', "%{$request->keyword}%")
                ->orWhere('kode_transaksi_id', 'like', "%{$request->keyword}%");
            })->latest()->paginate(10);
            $btn->appends($request->only('keyword'));
        

        return view('backend.btn.index', compact('btndata', 'btn', 'kode_transaksi_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_urut' => 'required|unique:btn_data'
        ]);

        $btn = new BtnData;

        $btn->no_urut = $request->no_urut;
        $btn->tanggal_1 = $request->tanggal_1;
        $btn->tanggal_2 = $request->tanggal_2;
        $btn->remark = $request->remark;
        $btn->waktu_posting = $request->waktu_posting;
        $btn->debit = $request->debit;
        $btn->kredit = $request->kredit;
        $btn->saldo = $request->saldo;
        $btn->kode_transaksi_id = $request->kode_transaksi_id;
        $btn->save();

        toastr()->success('Data berhasil ditambah!', "$btn->remark");

        return redirect()->route('btn.index');
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

        $btn = BtnData::findOrFail($request->id);

        $btn->tanggal_1 = $request->tanggal_1;
        $btn->tanggal_2 = $request->tanggal_2;
        $btn->remark = $request->remark;
        $btn->waktu_posting = $request->waktu_posting;
        $btn->debit = $request->debit;
        $btn->kredit = $request->kredit;
        $btn->saldo = $request->saldo;
        $btn->kode_transaksi_id = $request->kode_transaksi_id;
        $btn->save();

        toastr()->warning('Data berhasil diubah!', "$btn->remark");

        return redirect()->route('btn.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $btn = BtnData::findOrFail($request->id);
        $old = $btn->remark;
        $btn->delete();
        
        toastr()->error('Data berhasil dihapus!', "$old");
        
        return redirect()->route('btn.index');
    }

    public function rekaptahun(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::orderBy('id', 'asc')->get();
        $sum_debit = BtnData::sum('debit');
        $sum_kredit = BtnData::sum('kredit');
        $count = BtnData::count('kode_transaksi_id');

        //or
        
        //$kode_transaksi_id = DB::table('kode_transaksis')->orderBy('id', 'asc')->get();
        //$sum_debit = DB::table('btn_data')->sum('debit');
        //$sum_kredit = DB::table('btn_data')->sum('kredit');
        $cari = $request->cari;

        if ($cari) {
            $kode_transaksi_id = KodeTransaksi::where('nama', 'LIKE', "%$cari%")->orWhere('nama_kt', 'LIKE', "%$cari%")->get();
        } 
        return view('backend.btn.rekap-tahun', compact('kode_transaksi_id', 'sum_debit', 'sum_kredit', 'count'));
    }

    public function januari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $januari = BtnData::where('tanggal_1', 'like', '%2019-01%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $januari = BtnData::where('tanggal_1', 'LIKE', "%2019-01-$cari%")->paginate(10);
            $januari->appends($request->only('cari'));
        }  
        
        return view('backend.btn.perbulan.januari', compact('kode_transaksi_id', 'januari'));
    }

    public function februari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $februari = BtnData::where('tanggal_1', 'like', '%2019-02%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $februari = BtnData::where('tanggal_1', 'LIKE', "%2019-02-$cari%")->paginate(10);
            $februari->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.februari', compact('kode_transaksi_id', 'februari'));
    }

    public function maret(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $maret = BtnData::where('tanggal_1', 'like', '%2019-03%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $maret = BtnData::where('tanggal_1', 'LIKE', "%2019-03-$cari%")->paginate(10);
            $maret->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.maret', compact('kode_transaksi_id', 'maret'));
    }

    public function april(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $april = BtnData::where('tanggal_1', 'like', '%2019-04%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $april = BtnData::where('tanggal_1', 'LIKE', "%2019-04-$cari%")->paginate(10);
            $april->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.april', compact('kode_transaksi_id', 'april'));
    }

    public function mei(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $mei = BtnData::where('tanggal_1', 'like', '%2019-05%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $mei = BtnData::where('tanggal_1', 'LIKE', "%2019-05-$cari%")->paginate(10);
            $mei->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.mei', compact('kode_transaksi_id', 'mei'));
    }

    public function juni(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juni = BtnData::where('tanggal_1', 'like', '%2019-06%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juni = BtnData::where('tanggal_1', 'LIKE', "%2019-06-$cari%")->paginate(10);
            $juni->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.juni', compact('kode_transaksi_id', 'juni'));
    }

    public function juli(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juli = BtnData::where('tanggal_1', 'like', '%2019-07%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juli = BtnData::where('tanggal_1', 'LIKE', "%2019-07-$cari%")->paginate(10);
            $juli->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.juli', compact('kode_transaksi_id', 'juli'));
    }

    public function agustus(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $agustus = BtnData::where('tanggal_1', 'like', '%2019-08%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $agustus = BtnData::where('tanggal_1', 'LIKE', "%2019-08-$cari%")->paginate(10);
            $agustus->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.agustus', compact('kode_transaksi_id', 'agustus'));
    }

    public function september(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $september = BtnData::where('tanggal_1', 'like', '%2019-09%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $september = BtnData::where('tanggal_1', 'LIKE', "%2019-09-$cari%")->paginate(10);
            $september->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.september', compact('kode_transaksi_id', 'september'));
    }

    public function oktober(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $oktober = BtnData::where('tanggal_1', 'like', '%2019-10%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $oktober = BtnData::where('tanggal_1', 'LIKE', "%2019-10-$cari%")->paginate(10);
            $oktober->appends($request->only('cari'));
        }  
        
        return view('backend.btn.perbulan.oktober', compact('kode_transaksi_id', 'oktober'));
    }

    public function nopember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $nopember = BtnData::where('tanggal_1', 'like', '%2019-11%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $nopember = BtnData::where('tanggal_1', 'LIKE', "%2019-11-$cari%")->paginate(10);
            $nopember->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.nopember', compact('kode_transaksi_id', 'nopember'));
    }
    
    public function desember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $desember = BtnData::where('tanggal_1', 'like', '%2019-12%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $desember = BtnData::where('tanggal_1', 'LIKE', "%2019-12-$cari%")->paginate(10);
            $desember->appends($request->only('cari'));
        }  

        return view('backend.btn.perbulan.desember', compact('kode_transaksi_id', 'desember'));
    }
}
