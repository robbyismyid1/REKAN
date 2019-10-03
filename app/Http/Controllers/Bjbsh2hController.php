<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Bjbsh2hData;
use App\KodeRekening;
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

    public function index(Request $request)
    {
        $kode_rekening_id = KodeRekening::all(); 
        $bjbsh2h = Bjbsh2hData::when($request->keyword, function ($query) use ($request) {
            $query->where('no_urut', 'like', "%{$request->keyword}%")
                ->orWhere('tanggal_1', 'like', "%{$request->keyword}%")
                ->orWhere('kode', 'like', "%{$request->keyword}%")
                ->orWhere('remark', 'like', "%{$request->keyword}%")
                ->orWhere('no_bukti', 'like', "%{$request->keyword}%")
                ->orWhere('debit', 'like', "%{$request->keyword}%")
                ->orWhere('kredit', 'like', "%{$request->keyword}%")
                ->orWhere('saldo', 'like', "%{$request->keyword}%")
                ->orWhere('kode_rekening_id', 'like', "%{$request->keyword}%");
            })->latest()->paginate(10);
            $bjbsh2h->appends($request->only('keyword'));
        

        return view('backend.bjbsh2h.index', compact('bjbsh2h', 'kode_rekening_id'));
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
        $bjbsh2h->kode_rekening_id = $request->kode_rekening_id;
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
        $bjbsh2h->kode_rekening_id = $request->kode_rekening_id;
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
}
