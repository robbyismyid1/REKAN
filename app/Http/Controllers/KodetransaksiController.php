<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\KodeTransaksi;
use App\BjbsData;
use Session;

class KodetransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $kode_transaksi_id = KodeTransaksi::all();
        $response = [
            'success' => true,
            'data' => $kode_transaksi_id,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
    public function index(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::when($request->keyword, function ($query) use ($request) {
            $query->where('id', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%")
                ->orWhere('nama_kt', 'like', "%{$request->keyword}%");
            })->orderBy('nama', 'ASC')->paginate(10);

            $kode_transaksi_id->appends($request->only('keyword'));
        

        return view('backend.kode_transaksi.index', compact('kode_transaksi_id'));
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
            'nama' => 'required|unique:kode_transaksis'
        ]);

        $kode_transaksi_id = new KodeTransaksi;

        $kode_transaksi_id->nama = $request->nama;
        $kode_transaksi_id->nama_kt = $request->nama_kt;
        $kode_transaksi_id->save();

        toastr()->success('Data berhasil ditambah!', "$kode_transaksi_id->nama_kt");

        return redirect()->route('kode-transaksi.index');
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
        

        $kode_transaksi_id = KodeTransaksi::findOrFail($request->id);

        $kode_transaksi_id->nama = $request->nama;
        $kode_transaksi_id->nama_kt = $request->nama_kt;
        $kode_transaksi_id->save();

        toastr()->warning('Data berhasil diubah!', "$kode_transaksi_id->nama_kt");

        return redirect()->route('kode-transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kode_transaksi_id = KodeTransaksi::findOrFail($request->id);
        $bjbs_data = BjbsData::all();
        // $old = $kode_transaksi_id->nama_kt;
        $kode_transaksi_id->delete();

        return redirect()->route('kode-transaksi.index');
    }
}