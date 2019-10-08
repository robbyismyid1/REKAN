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
}