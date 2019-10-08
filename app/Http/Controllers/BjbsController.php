<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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

    public function rekaptahun(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all(); 
        $bjbsrekap = BjbsData::when($request->keyword, function ($query) use ($request) {
            $query->where('kode_rekening_bank', 'like', "%{$request->keyword}%")
                ->orWhere('debit', 'like', "%{$request->keyword}%")
                ->orWhere('kredit', 'like', "%{$request->keyword}%");
            })->latest()->paginate(10);
            $bjbsrekap->appends($request->only('keyword'));
        

        return view('backend.bjbs.rekap-tahun', compact('bjbsrekap', 'kode_transaksi_id'));
    }

    public function index(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::all(); 
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
}
