<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bris;
use App\KodeRekening;
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
        $bris = Bris::all();
        $response = [
            'success' => true,
            'data' => $bris,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function index(Request $request)
    {
        $kode_rekening = KodeRekening::all(); 
        $bris = Bris::when($request->keyword, function ($query) use ($request) {
            $query->where('no_urut', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_1', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_2', 'like', "%{$request->keyword}%")
                ->orWhere('remark', 'like', "%{$request->keyword}%")
                ->orWhere('kode_rekening_bank', 'like', "%{$request->keyword}%")
                ->orWhere('debit', 'like', "%{$request->keyword}%")
                ->orWhere('kredit', 'like', "%{$request->keyword}%")
                ->orWhere('saldo', 'like', "%{$request->keyword}%")
                ->orWhere('kode_rekening_id', 'like', "%{$request->keyword}%");
            })->latest()->paginate(10);
            $bris->appends($request->only('keyword'));
        

        return view('backend.bris.index', compact('bris', 'kode_rekening'));
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
            'no_urut' => 'required|unique:bris'
        ]);

        $bris = new Bris;

        $bris->no_urut = $request->no_urut;
        $bris->tanggal_1 = $request->tanggal_1;
        $bris->tanggal_2 = $request->tanggal_2;
        $bris->remark = $request->remark;
        $bris->kode_rekening_bank = $request->kode_rekening_bank;
        $bris->debit = $request->debit;
        $bris->kredit = $request->kredit;
        $bris->saldo = $request->saldo;
        $bris->kode_rekening_id = $request->kode_rekening_id;
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

        $bris = Bris::findOrFail($request->id);

        $bris->tanggal_1 = $request->tanggal_1;
        $bris->tanggal_2 = $request->tanggal_2;
        $bris->remark = $request->remark;
        $bris->kode_rekening_bank = $request->kode_rekening_bank;
        $bris->debit = $request->debit;
        $bris->kredit = $request->kredit;
        $bris->saldo = $request->saldo;
        $bris->kode_rekening_id = $request->kode_rekening_id;
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
        $bris = Bris::findOrFail($request->id);
        $old = $bris->remark;
        $bris->delete();
        
        toastr()->warning('Data berhasil dihapus!', "$old");
        
        return redirect()->route('bri-syariah.index');
    }
}