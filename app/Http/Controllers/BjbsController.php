<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CsvExBjbs;
use App\Imports\CsvImBjbs;
use App\BjbsData;
use App\KodeTransaksi;
use Session;

class BjbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $bjbs = BjbsData::all();
        $response = [
            'success' => true,
            'data' => $bjbs,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function home()
    {
        return view('backend.bjbs.home');
    }

    public function index(Request $request)
    {
        $bjbs = BjbsData::when($request->keyword, function ($query) use ($request) {
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
            $bjbs->appends($request->only('keyword'));
        $kode_transaksi_id = KodeTransaksi::all();
        

        return view('backend.bjbs.index', compact('bjbs', 'kode_transaksi_id'));
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
            'no_urut' => 'required|unique:bjbs_data'
        ]);

        $bjbs = new BjbsData;

        $bjbs->no_urut = $request->no_urut;
        $bjbs->tanggal_1 = $request->tanggal_1;
        $bjbs->kode = $request->kode;
        $bjbs->remark = $request->remark;
        $bjbs->no_bukti = $request->no_bukti;
        $bjbs->debit = $request->debit;
        $bjbs->kredit = $request->kredit;
        $bjbs->saldo = $request->saldo;
        $bjbs->kode_transaksi_id = $request->kode_transaksi_id;
        $bjbs->save();

        toastr()->success('Data berhasil ditambah!', "$bjbs->remark");

        return redirect()->route('bjbs.index');
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

        $bjbs = BjbsData::findOrFail($request->id);

        $bjbs->tanggal_1 = $request->tanggal_1;
        $bjbs->kode = $request->kode;
        $bjbs->remark = $request->remark;
        $bjbs->no_bukti = $request->no_bukti;
        $bjbs->debit = $request->debit;
        $bjbs->kredit = $request->kredit;
        $bjbs->saldo = $request->saldo;
        $bjbs->kode_transaksi_id = $request->kode_transaksi_id;
        $bjbs->save();

        toastr()->warning('Data berhasil diubah!', "$bjbs->remark");

        return redirect()->route('bjbs.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bjbs = BjbsData::findOrFail($request->id);
        $old = $bjbs->remark;
        $bjbs->delete();
        
        toastr()->error('Data berhasil dihapus!', "$old");
        
        return redirect()->route('bjbs.index');
    }

    public function rekaptahun(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::orderBy('id', 'asc')->get();
        $sum_debit = BjbsData::sum('debit');
        $sum_kredit = BjbsData::sum('kredit');
        $count = BjbsData::count('kode_transaksi_id');

        //or
        
        //$kode_transaksi_id = DB::table('kode_transaksis')->orderBy('id', 'asc')->get();
        //$sum_debit = DB::table('bjbs_data')->sum('debit');
        //$sum_kredit = DB::table('bjbs_data')->sum('kredit');

        $cari = $request->cari;
        if ($cari) {
            $kode_transaksi_id = KodeTransaksi::where('nama', 'LIKE', "%$cari%")->orWhere('nama_kt', 'LIKE', "%$cari%")->get();
        }    

        return view('backend.bjbs.rekap-tahun', compact('kode_transaksi_id', 'sum_debit', 'sum_kredit', 'count'));
    }

    public function januari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $januari = BjbsData::where('tanggal_1', 'like', '%2019-01%')->paginate(10); 
        $cari = $request->cari;
        if ($cari) {
            $januari = BjbsData::where('tanggal_1', 'LIKE', "%2019-01-$cari%")->paginate(10);
        }   

        return view('backend.bjbs.perbulan.januari', compact('kode_transaksi_id', 'januari'));
    }

    public function februari(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $februari = BjbsData::where('tanggal_1', 'like', '%2019-02%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $februari = BjbsData::where('tanggal_1', 'LIKE', "%2019-02-$cari%")->paginate(10);
        }   
        
        return view('backend.bjbs.perbulan.februari', compact('kode_transaksi_id', 'februari'));
    }

    public function maret(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $maret = BjbsData::where('tanggal_1', 'like', '%2019-03%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $maret = BjbsData::where('tanggal_1', 'LIKE', "%2019-03-$cari%")->paginate(10);
        }  
        
        return view('backend.bjbs.perbulan.maret', compact('kode_transaksi_id', 'maret'));
    }

    public function april(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $april = BjbsData::where('tanggal_1', 'like', '%2019-04%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $april = BjbsData::where('tanggal_1', 'LIKE', "%2019-04-$cari%")->paginate(10);
        }  
        
        return view('backend.bjbs.perbulan.april', compact('kode_transaksi_id', 'april'));
    }

    public function mei(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $mei = BjbsData::where('tanggal_1', 'like', '%2019-05%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $mei = BjbsData::where('tanggal_1', 'LIKE', "%2019-05-$cari%")->paginate(10);
        }  
        
        return view('backend.bjbs.perbulan.mei', compact('kode_transaksi_id', 'mei'));
    }

    public function juni(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juni = BjbsData::where('tanggal_1', 'like', '%2019-06%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juni = BjbsData::where('tanggal_1', 'LIKE', "%2019-06-$cari%")->paginate(10);
        } 

        return view('backend.bjbs.perbulan.juni', compact('kode_transaksi_id', 'juni'));
    }

    public function juli(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $juli = BjbsData::where('tanggal_1', 'like', '%2019-07%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $juli = BjbsData::where('tanggal_1', 'LIKE', "%2019-07-$cari%")->paginate(10);
        } 

        return view('backend.bjbs.perbulan.juli', compact('kode_transaksi_id', 'juli'));
    }

    public function agustus(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $agustus = BjbsData::where('tanggal_1', 'like', '%2019-08%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $agustus = BjbsData::where('tanggal_1', 'LIKE', "%2019-08-$cari%")->paginate(10);
        } 

        return view('backend.bjbs.perbulan.agustus', compact('kode_transaksi_id', 'agustus'));
    }

    public function september(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $september = BjbsData::where('tanggal_1', 'like', '%2019-09%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $september = BjbsData::where('tanggal_1', 'LIKE', "%2019-09-$cari%")->paginate(10);
        } 

        return view('backend.bjbs.perbulan.september', compact('kode_transaksi_id', 'september'));
    }

    public function oktober(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $oktober = BjbsData::where('tanggal_1', 'like', '%2019-10%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $oktober = BjbsData::where('tanggal_1', 'LIKE', "%2019-10-$cari%")->paginate(10);
        } 

        return view('backend.bjbs.perbulan.oktober', compact('kode_transaksi_id', 'oktober'));
    }

    public function nopember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $nopember = BjbsData::where('tanggal_1', 'like', '%2019-11%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $nopember = BjbsData::where('tanggal_1', 'LIKE', "%2019-11-$cari%")->paginate(10);
        } 

        return view('backend.bjbs.perbulan.nopember', compact('kode_transaksi_id', 'nopember'));
    }
    
    public function desember(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $desember = BjbsData::where('tanggal_1', 'like', '%2019-12%')->paginate(10);
        $cari = $request->cari;
        if ($cari) {
            $desember = BjbsData::where('tanggal_1', 'LIKE', "%2019-12-$cari%")->paginate(10);
        } 

        return view('backend.bjbs.perbulan.desember', compact('kode_transaksi_id', 'desember'));
    }

    public function csv_exbjbs()
    {
        return Excel::download(new CsvExBjbs, 'bjbs.csv');
    }
    
    public function csv_imbjbs()
    {
        Excel::import(new CsvImBjbs, request()->file('file'));
        return back();
    }
}
