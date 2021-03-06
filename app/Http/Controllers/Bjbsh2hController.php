<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bjbsh2hData;
use App\KodeTransaksi;
use Session;

class Bjbsh2hController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $bjbsh2h = Bjbsh2hData::all();
        $response = [
            'success' => true,
            'data' => $bjbsh2h,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function home()
    {
        return view('backend.bjbsh2h.home');
    }

    public function index(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all(); 
        $bjbsh2h = Bjbsh2hData::when($request->keyword, function ($query) use ($request) {
            $query->where('no_urut', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_1', 'like', "%{$request->keyword}%")
                ->orWhere('kode', 'like', "%{$request->keyword}%")
                ->orWhere('remark', 'like', "%{$request->keyword}%")
                ->orWhere('no_bukti', 'like', "%{$request->keyword}%")
                ->orWhere('debit', 'like', "%{$request->keyword}%")
                ->orWhere('kredit', 'like', "%{$request->keyword}%")
                ->orWhere('saldo', 'like', "%{$request->keyword}%")
                ->orWhere('kode_transaksi_id', 'like', "%{$request->keyword}%");
            })->latest()->paginate(10);
            $bjbsh2h->appends($request->only('keyword'));
        

        return view('backend.bjbsh2h.index', compact('bjbsh2h', 'kode_transaksi_id'));
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
            'no_urut' => 'required|unique:bjbsh2h_data'
        ]);

        $bjbsh2h = new Bjbsh2hData;

        $bjbsh2h->no_urut = $request->no_urut;
        $bjbsh2h->tanggal_1 = $request->tanggal_1;
        $bjbsh2h->kode = $request->kode;
        $bjbsh2h->remark = $request->remark;
        $bjbsh2h->no_bukti = $request->no_bukti;
        $bjbsh2h->debit = $request->debit;
        $bjbsh2h->kredit = $request->kredit;
        $bjbsh2h->saldo = $request->saldo;
        $bjbsh2h->kode_transaksi_id = $request->kode_transaksi_id;
        $bjbsh2h->save();

        toastr()->success('Data berhasil ditambah!', "$bjbsh2h->remark");

        return redirect()->route('bjbs-h2h.index');
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

        $bjbsh2h = Bjbsh2hData::findOrFail($request->id);

        $bjbsh2h->tanggal_1 = $request->tanggal_1;
        $bjbsh2h->kode = $request->kode;
        $bjbsh2h->remark = $request->remark;
        $bjbsh2h->no_bukti = $request->no_bukti;
        $bjbsh2h->debit = $request->debit;
        $bjbsh2h->kredit = $request->kredit;
        $bjbsh2h->saldo = $request->saldo;
        $bjbsh2h->kode_transaksi_id = $request->kode_transaksi_id;
        $bjbsh2h->save();

        toastr()->warning('Data berhasil diubah!', "$bjbsh2h->remark");

        return redirect()->route('bjbs-h2h.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bjbsh2h = Bjbsh2hData::findOrFail($request->id);
        $old = $bjbsh2h->remark;
        $bjbsh2h->delete();
        
        toastr()->error('Data berhasil dihapus!', "$old");
        
        return redirect()->route('bjbs-h2h.index');
    }

    public function rekaptahun(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::orderBy('id', 'asc')->get();
        $sum_debit = Bjbsh2hData::sum('debit');
        $sum_kredit = Bjbsh2hData::sum('kredit');
        $count = Bjbsh2hData::count('kode_transaksi_id');

        //or
        
        //$kode_transaksi_id = DB::table('kode_transaksis')->orderBy('id', 'asc')->get();
        //$sum_debit = DB::table('bjbsh2h_data')->sum('debit');
        //$sum_kredit = DB::table('bjbsh2h_data')->sum('kredit');
        $cari = $request->cari;

        if ($cari) {
            $kode_transaksi_id = KodeTransaksi::where('nama', 'LIKE', "%$cari%")->orWhere('nama_kt', 'LIKE', "%$cari%")->get();
        } 
        return view('backend.bjbsh2h.rekap-tahun', compact('kode_transaksi_id', 'sum_debit', 'sum_kredit', 'count'));
    }

    public function januari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $januari = Bjbsh2hData::where('tanggal_1', 'like', '%2019-01%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $januari = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-01-$cari%")->paginate(10);
            $januari->appends($request->only('cari'));
        }  
        
        return view('backend.bjbsh2h.perbulan.januari', compact('kode_transaksi_id', 'januari'));
    }

    public function februari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $februari = Bjbsh2hData::where('tanggal_1', 'like', '%2019-02%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $februari = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-02-$cari%")->paginate(10);
            $februari->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.februari', compact('kode_transaksi_id', 'februari'));
    }

    public function maret(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $maret = Bjbsh2hData::where('tanggal_1', 'like', '%2019-03%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $maret = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-03-$cari%")->paginate(10);
            $maret->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.maret', compact('kode_transaksi_id', 'maret'));
    }

    public function april(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $april = Bjbsh2hData::where('tanggal_1', 'like', '%2019-04%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $april = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-04-$cari%")->paginate(10);
            $april->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.april', compact('kode_transaksi_id', 'april'));
    }

    public function mei(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $mei = Bjbsh2hData::where('tanggal_1', 'like', '%2019-05%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $mei = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-05-$cari%")->paginate(10);
            $mei->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.mei', compact('kode_transaksi_id', 'mei'));
    }

    public function juni(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juni = Bjbsh2hData::where('tanggal_1', 'like', '%2019-06%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juni = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-06-$cari%")->paginate(10);
            $juni->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.juni', compact('kode_transaksi_id', 'juni'));
    }

    public function juli(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juli = Bjbsh2hData::where('tanggal_1', 'like', '%2019-07%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juli = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-07-$cari%")->paginate(10);
            $juli->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.juli', compact('kode_transaksi_id', 'juli'));
    }

    public function agustus(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $agustus = Bjbsh2hData::where('tanggal_1', 'like', '%2019-08%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $agustus = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-08-$cari%")->paginate(10);
            $agustus->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.agustus', compact('kode_transaksi_id', 'agustus'));
    }

    public function september(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $september = Bjbsh2hData::where('tanggal_1', 'like', '%2019-09%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $september = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-09-$cari%")->paginate(10);
            $september->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.september', compact('kode_transaksi_id', 'september'));
    }

    public function oktober(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $oktober = Bjbsh2hData::where('tanggal_1', 'like', '%2019-10%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $oktober = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-10-$cari%")->paginate(10);
            $oktober->appends($request->only('cari'));
        }  
        
        return view('backend.bjbsh2h.perbulan.oktober', compact('kode_transaksi_id', 'oktober'));
    }

    public function nopember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $nopember = Bjbsh2hData::where('tanggal_1', 'like', '%2019-11%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $nopember = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-11-$cari%")->paginate(10);
            $nopember->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.nopember', compact('kode_transaksi_id', 'nopember'));
    }
    
    public function desember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $desember = Bjbsh2hData::where('tanggal_1', 'like', '%2019-12%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $desember = Bjbsh2hData::where('tanggal_1', 'LIKE', "%2019-12-$cari%")->paginate(10);
            $desember->appends($request->only('cari'));
        }  

        return view('backend.bjbsh2h.perbulan.desember', compact('kode_transaksi_id', 'desember'));
    }
}
