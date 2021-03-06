<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\BsmData;
use App\KodeTransaksi;
use Session;

class BsmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $bsm = BsmData::all();
        $response = [
            'success' => true,
            'data' => $bsm,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function home()
    {
        return view('backend.bsm.home');
    }

    public function index(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all(); 
        $bsm = BsmData::when($request->keyword, function ($query) use ($request) {
            $query->where('no_urut', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_1', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_2', 'like', "%{$request->keyword}%")
                ->orWhere('remark', 'like', "%{$request->keyword}%")
                ->orWhere('kode_rekening_bank', 'like', "%{$request->keyword}%")
                ->orWhere('debit', 'like', "%{$request->keyword}%")
                ->orWhere('kredit', 'like', "%{$request->keyword}%")
                ->orWhere('saldo', 'like', "%{$request->keyword}%")
                ->orWhere('kode_transaksi_id', 'like', "%{$request->keyword}%");
            })->latest()->paginate(10);
            $bsm->appends($request->only('keyword'));
        

        return view('backend.bsm.index', compact('bsm', 'kode_transaksi_id'));
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
            'no_urut' => 'required|unique:bsm_data'
        ]);

        $bsm = new BsmData;

        $bsm->no_urut = $request->no_urut;
        $bsm->tanggal_1 = $request->tanggal_1;
        $bsm->tanggal_2 = $request->tanggal_2;
        $bsm->remark = $request->remark;
        $bsm->kode_rekening_bank = $request->kode_rekening_bank;
        $bsm->debit = $request->debit;
        $bsm->kredit = $request->kredit;
        $bsm->saldo = $request->saldo;
        $bsm->kode_transaksi_id = $request->kode_transaksi_id;
        $bsm->save();

        toastr()->success('Data berhasil ditambah!', "$bsm->remark");

        return redirect()->route('bsm.index');
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

        $bsm = BsmData::findOrFail($request->id);

        $bsm->tanggal_1 = $request->tanggal_1;
        $bsm->tanggal_2 = $request->tanggal_2;
        $bsm->remark = $request->remark;
        $bsm->kode_rekening_bank = $request->kode_rekening_bank;
        $bsm->debit = $request->debit;
        $bsm->kredit = $request->kredit;
        $bsm->saldo = $request->saldo;
        $bsm->kode_transaksi_id = $request->kode_transaksi_id;
        $bsm->save();

        toastr()->warning('Data berhasil diubah!', "$bsm->remark");

        return redirect()->route('bsm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bsm = BsmData::findOrFail($request->id);
        $old = $bsm->remark;
        $bsm->delete();
        
        toastr()->error('Data berhasil dihapus!', "$old");
        
        return redirect()->route('bsm.index');
    }

    public function rekaptahun(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::orderBy('id', 'asc')->get();
        $sum_debit = BsmData::sum('debit');
        $sum_kredit = BsmData::sum('kredit');
        $count = BsmData::count('kode_transaksi_id');

        //or
        
        //$kode_transaksi_id = DB::table('kode_transaksis')->orderBy('id', 'asc')->get();
        //$sum_debit = DB::table('bsm_data')->sum('debit');
        //$sum_kredit = DB::table('bsm_data')->sum('kredit');
        $cari = $request->cari;

        if ($cari) {
            $kode_transaksi_id = KodeTransaksi::where('nama', 'LIKE', "%$cari%")->orWhere('nama_kt', 'LIKE', "%$cari%")->get();
        }  

        return view('backend.bsm.rekap-tahun', compact('kode_transaksi_id', 'sum_debit', 'sum_kredit', 'count'));
    }

    public function januari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $januari = BsmData::where('tanggal_1', 'like', '%2019-01%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $januari = BsmData::where('tanggal_1', 'LIKE', "%2019-01-$cari%")->paginate(10);
            $januari->appends($request->only('cari'));
        }  
        
        return view('backend.bsm.perbulan.januari', compact('kode_transaksi_id', 'januari'));
    }

    public function februari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $februari = BsmData::where('tanggal_1', 'like', '%2019-02%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $februari = BsmData::where('tanggal_1', 'LIKE', "%2019-02-$cari%")->paginate(10);
            $februari->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.februari', compact('kode_transaksi_id', 'februari'));
    }

    public function maret(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $maret = BsmData::where('tanggal_1', 'like', '%2019-03%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $maret = BsmData::where('tanggal_1', 'LIKE', "%2019-03-$cari%")->paginate(10);
            $maret->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.maret', compact('kode_transaksi_id', 'maret'));
    }

    public function april(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $april = BsmData::where('tanggal_1', 'like', '%2019-04%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $april = BsmData::where('tanggal_1', 'LIKE', "%2019-04-$cari%")->paginate(10);
            $april->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.april', compact('kode_transaksi_id', 'april'));
    }

    public function mei(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $mei = BsmData::where('tanggal_1', 'like', '%2019-05%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $mei = BsmData::where('tanggal_1', 'LIKE', "%2019-05-$cari%")->paginate(10);
            $mei->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.mei', compact('kode_transaksi_id', 'mei'));
    }

    public function juni(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juni = BsmData::where('tanggal_1', 'like', '%2019-06%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juni = BsmData::where('tanggal_1', 'LIKE', "%2019-06-$cari%")->paginate(10);
            $juni->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.juni', compact('kode_transaksi_id', 'juni'));
    }

    public function juli(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juli = BsmData::where('tanggal_1', 'like', '%2019-07%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juli = BsmData::where('tanggal_1', 'LIKE', "%2019-07-$cari%")->paginate(10);
            $juli->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.juli', compact('kode_transaksi_id', 'juli'));
    }

    public function agustus(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $agustus = BsmData::where('tanggal_1', 'like', '%2019-08%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $agustus = BsmData::where('tanggal_1', 'LIKE', "%2019-08-$cari%")->paginate(10);
            $agustus->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.agustus', compact('kode_transaksi_id', 'agustus'));
    }

    public function september(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $september = BsmData::where('tanggal_1', 'like', '%2019-09%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $september = BsmData::where('tanggal_1', 'LIKE', "%2019-09-$cari%")->paginate(10);
            $september->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.september', compact('kode_transaksi_id', 'september'));
    }

    public function oktober(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $oktober = BsmData::where('tanggal_1', 'like', '%2019-10%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $oktober = BsmData::where('tanggal_1', 'LIKE', "%2019-10-$cari%")->paginate(10);
            $oktober->appends($request->only('cari'));
        }  
        
        return view('backend.bsm.perbulan.oktober', compact('kode_transaksi_id', 'oktober'));
    }

    public function nopember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $nopember = BsmData::where('tanggal_1', 'like', '%2019-11%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $nopember = BsmData::where('tanggal_1', 'LIKE', "%2019-11-$cari%")->paginate(10);
            $nopember->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.nopember', compact('kode_transaksi_id', 'nopember'));
    }
    
    public function desember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $desember = BsmData::where('tanggal_1', 'like', '%2019-12%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $desember = BsmData::where('tanggal_1', 'LIKE', "%2019-12-$cari%")->paginate(10);
            $desember->appends($request->only('cari'));
        }  

        return view('backend.bsm.perbulan.desember', compact('kode_transaksi_id', 'desember'));
    }
}
