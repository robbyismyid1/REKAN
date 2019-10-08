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
}
