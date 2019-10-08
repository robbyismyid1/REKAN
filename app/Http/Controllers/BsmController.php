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
}
