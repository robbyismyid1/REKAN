<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\BrisData;
use App\KodeTransaksi;
use Session;

class BrisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $bris = BrisData::all();
        $response = [
            'success' => true,
            'data' => $bris,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function home()
    {
        return view('backend.bris.home');
    }

    public function index(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all(); 
        $bris = BrisData::when($request->keyword, function ($query) use ($request) {
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
            $bris->appends($request->only('keyword'));
        

        return view('backend.bris.index', compact('bris', 'kode_transaksi_id'));
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
            'no_urut' => 'required|unique:bris_data'
        ]);

        $bris = new BrisData;

        $bris->no_urut = $request->no_urut;
        $bris->tanggal_1 = $request->tanggal_1;
        $bris->tanggal_2 = $request->tanggal_2;
        $bris->remark = $request->remark;
        $bris->kode_rekening_bank = $request->kode_rekening_bank;
        $bris->debit = $request->debit;
        $bris->kredit = $request->kredit;
        $bris->saldo = $request->saldo;
        $bris->kode_transaksi_id = $request->kode_transaksi_id;
        $bris->save();

        toastr()->success('Data berhasil ditambah!', "$bris->remark");

        return redirect()->route('bri-syariah.index');
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

        $bris = BrisData::findOrFail($request->id);

        $bris->tanggal_1 = $request->tanggal_1;
        $bris->tanggal_2 = $request->tanggal_2;
        $bris->remark = $request->remark;
        $bris->kode_rekening_bank = $request->kode_rekening_bank;
        $bris->debit = $request->debit;
        $bris->kredit = $request->kredit;
        $bris->saldo = $request->saldo;
        $bris->kode_transaksi_id = $request->kode_transaksi_id;
        $bris->save();

        toastr()->warning('Data berhasil diubah!', "$bris->remark");

        return redirect()->route('bri-syariah.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bris = BrisData::findOrFail($request->id);
        $old = $bris->remark;
        $bris->delete();
        
        // toastr()->error('Data berhasil dihapus!', "$old");
        
        return redirect()->route('bri-syariah.index');
    }

    public function rekaptahun(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::orderBy('id', 'asc')->get();
        $sum_debit = BrisData::sum('debit');
        $sum_kredit = BrisData::sum('kredit');

        //or
        
        //$kode_transaksi_id = DB::table('kode_transaksis')->orderBy('id', 'asc')->get();
        //$sum_debit = DB::table('bris_data')->sum('debit');
        //$sum_kredit = DB::table('bris_data')->sum('kredit');
        $cari = $request->cari;

        if ($cari) {
            $kode_transaksi_id = KodeTransaksi::where('nama', 'LIKE', "%$cari%")->orWhere('nama_kt', 'LIKE', "%$cari%")->get();
        } 
        
        return view('backend.bris.rekap-tahun', compact('kode_transaksi_id', 'sum_debit', 'sum_kredit'));
    }

    public function rekapjanuari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $januari = BrisData::where('tanggal_1', 'like', '%2019-01%')->paginate(10);
        
        return view('backend.bris.perbulan.januari', compact('kode_transaksi_id', 'januari'));
    }

    public function rekapfebruari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $februari = BrisData::where('tanggal_1', 'like', '%2019-02%')->paginate(10);
        
        return view('backend.bris.perbulan.februari', compact('kode_transaksi_id', 'februari'));
    }

    public function rekapmaret(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $maret = BrisData::where('tanggal_1', 'like', '%2019-03%')->paginate(10);
        
        return view('backend.bris.perbulan.maret', compact('kode_transaksi_id', 'maret'));
    }

    public function rekapapril(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $april = BrisData::where('tanggal_1', 'like', '%2019-04%')->paginate(10);
        
        return view('backend.bris.perbulan.april', compact('kode_transaksi_id', 'april'));
    }

    public function rekapmei(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $mei = BrisData::where('tanggal_1', 'like', '%2019-05%')->paginate(10);
        
        return view('backend.bris.perbulan.mei', compact('kode_transaksi_id', 'mei'));
    }

    public function rekapjuni(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juni = BrisData::where('tanggal_1', 'like', '%2019-06%')->paginate(10);
        
        return view('backend.bris.perbulan.juni', compact('kode_transaksi_id', 'juni'));
    }

    public function rekapjuli(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juli = BrisData::where('tanggal_1', 'like', '%2019-07%')->paginate(10);
        
        return view('backend.bris.perbulan.juli', compact('kode_transaksi_id', 'juli'));
    }

    public function rekapagustus(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $agustus = BrisData::where('tanggal_1', 'like', '%2019-08%')->paginate(10);
        
        return view('backend.bris.perbulan.agustus', compact('kode_transaksi_id', 'agustus'));
    }

    public function rekapseptember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $september = BrisData::where('tanggal_1', 'like', '%2019-09%')->paginate(10);
        
        return view('backend.bris.perbulan.september', compact('kode_transaksi_id', 'september'));
    }

    public function rekapoktober(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $oktober = BrisData::where('tanggal_1', 'like', '%2019-10%')->paginate(10);
        
        return view('backend.bris.perbulan.oktober', compact('kode_transaksi_id', 'oktober'));
    }

    public function rekapnopember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $nopember = BrisData::where('tanggal_1', 'like', '%2019-11%')->paginate(10);
        
        return view('backend.bris.perbulan.nopember', compact('kode_transaksi_id', 'nopember'));
    }
    
    public function rekapdesember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $desember = BrisData::where('tanggal_1', 'like', '%2019-12%')->paginate(10);
        
        return view('backend.bris.perbulan.desember', compact('kode_transaksi_id', 'desember'));
    }
}