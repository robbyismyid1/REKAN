<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\BriData;
use App\KodeTransaksi;
use Session;

class BriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $bri = BriData::all();
        $response = [
            'success' => true,
            'data' => $bri,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function home()
    {
        return view('backend.bri.home');
    }

    public function index(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all(); 
        $bri = BriData::when($request->keyword, function ($query) use ($request) {
            $query->where('no_urut', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_1', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_2', 'like', "%{$request->keyword}%")
                ->orWhere('remark', 'like', "%{$request->keyword}%")
                ->orWhere('kode_teller', 'like', "%{$request->keyword}%")
                ->orWhere('debit', 'like', "%{$request->keyword}%")
                ->orWhere('kredit', 'like', "%{$request->keyword}%")
                ->orWhere('saldo', 'like', "%{$request->keyword}%")
                ->orWhere('kode_transaksi_id', 'like', "%{$request->keyword}%");
            })->latest()->paginate(10);
            $bri->appends($request->only('keyword'));
        

        return view('backend.bri.index', compact('bri', 'kode_transaksi_id'));
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
            'no_urut' => 'required|unique:bri_data'
        ]);

        $bri = new BriData;

        $bri->no_urut = $request->no_urut;
        $bri->tanggal_1 = $request->tanggal_1;
        $bri->tanggal_2 = $request->tanggal_2;
        $bri->remark = $request->remark;
        $bri->kode_teller = $request->kode_teller;
        $bri->debit = $request->debit;
        $bri->kredit = $request->kredit;
        $bri->saldo = $request->saldo;
        $bri->kode_transaksi_id = $request->kode_transaksi_id;
        $bri->save();

        toastr()->success('Data berhasil ditambah!', "$bri->remark");

        return redirect()->route('bri.index');
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

        $bri = BriData::findOrFail($request->id);

        $bri->tanggal_1 = $request->tanggal_1;
        $bri->tanggal_2 = $request->tanggal_2;
        $bri->remark = $request->remark;
        $bri->kode_teller = $request->kode_teller;
        $bri->debit = $request->debit;
        $bri->kredit = $request->kredit;
        $bri->saldo = $request->saldo;
        $bri->kode_transaksi_id = $request->kode_transaksi_id;
        $bri->save();

        toastr()->warning('Data berhasil diubah!', "$bri->remark");

        return redirect()->route('bri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bri = BriData::findOrFail($request->id);
        $old = $bri->remark;
        $bri->delete();
        
        toastr()->error('Data berhasil dihapus!', "$old");
        
        return redirect()->route('bri.index');
    }

    public function rekaptahun(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $cari = $request->cari;

        if ($cari) {
            $kode_transaksi_id = KodeTransaksi::where('nama', 'LIKE', "%$cari%")->orWhere('nama_kt', 'LIKE', "%$cari%")->get();
        } 
        
        return view('backend.bri.rekap-tahun', compact('kode_transaksi_id'));
    }

    public function rekapjanuari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $januari = BriData::where('tanggal_1', 'like', '%2019-01%')->paginate(10);
        
        return view('backend.bri.perbulan.januari', compact('kode_transaksi_id', 'januari'));
    }

    public function rekapfebruari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $februari = BriData::where('tanggal_1', 'like', '%2019-02%')->paginate(10);
        
        return view('backend.bri.perbulan.februari', compact('kode_transaksi_id', 'februari'));
    }

    public function rekapmaret(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $maret = BriData::where('tanggal_1', 'like', '%2019-03%')->paginate(10);
        
        return view('backend.bri.perbulan.maret', compact('kode_transaksi_id', 'maret'));
    }

    public function rekapapril(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $april = BriData::where('tanggal_1', 'like', '%2019-04%')->paginate(10);
        
        return view('backend.bri.perbulan.april', compact('kode_transaksi_id', 'april'));
    }

    public function rekapmei(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $mei = BriData::where('tanggal_1', 'like', '%2019-05%')->paginate(10);
        
        return view('backend.bri.perbulan.mei', compact('kode_transaksi_id', 'mei'));
    }

    public function rekapjuni(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juni = BriData::where('tanggal_1', 'like', '%2019-06%')->paginate(10);
        
        return view('backend.bri.perbulan.juni', compact('kode_transaksi_id', 'juni'));
    }

    public function rekapjuli(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juli = BriData::where('tanggal_1', 'like', '%2019-07%')->paginate(10);
        
        return view('backend.bri.perbulan.juli', compact('kode_transaksi_id', 'juli'));
    }

    public function rekapagustus(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $agustus = BriData::where('tanggal_1', 'like', '%2019-08%')->paginate(10);
        
        return view('backend.bri.perbulan.agustus', compact('kode_transaksi_id', 'agustus'));
    }

    public function rekapseptember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $september = BriData::where('tanggal_1', 'like', '%2019-09%')->paginate(10);
        
        return view('backend.bri.perbulan.september', compact('kode_transaksi_id', 'september'));
    }

    public function rekapoktober(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $oktober = BriData::where('tanggal_1', 'like', '%2019-10%')->paginate(10);
        
        return view('backend.bri.perbulan.oktober', compact('kode_transaksi_id', 'oktober'));
    }

    public function rekapnopember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $nopember = BriData::where('tanggal_1', 'like', '%2019-11%')->paginate(10);
        
        return view('backend.bri.perbulan.nopember', compact('kode_transaksi_id', 'nopember'));
    }
    
    public function rekapdesember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $desember = BriData::where('tanggal_1', 'like', '%2019-12%')->paginate(10);
        
        return view('backend.bri.perbulan.desember', compact('kode_transaksi_id', 'desember'));
    }
}