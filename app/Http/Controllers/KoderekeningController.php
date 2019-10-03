<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\KodeRekening;
use Session;

class KoderekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getjson()
    {
        $kode_rekening_id = KodeRekening::all();
        $response = [
            'success' => true,
            'data' => $kode_rekening_id,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
    public function index(Request $request)
    {
        $kode_rekening_id = KodeRekening::when($request->keyword, function ($query) use ($request) {
            $query->where('id', 'like', "%{$request->keyword}%")
                ->orWhere('nama', 'like', "%{$request->keyword}%");
            })->orderBy('nama', 'ASC')->paginate(10);

            $kode_rekening_id->appends($request->only('keyword'));
        

        return view('backend.kode_rekening.index', compact('kode_rekening_id'));
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
            'nama' => 'required|unique:kode_rekening'
        ]);

        $kode_rekening_id = new KodeRekening;

        $kode_rekening_id->nama = $request->nama;
        $kode_rekening_id->save();

        toastr()->success('Data berhasil ditambah!', "$kode_rekening_id->nama");

        return redirect()->route('kode-rekening.index');
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
        $request->validate([
            'nama' => 'required|unique:kode_rekening'
        ]);

        $kode_rekening_id = KodeRekening::findOrFail($request->id);

        $kode_rekening_id->nama = $request->nama;
        $kode_rekening_id->save();

        toastr()->warning('Data berhasil diubah!', "$kode_rekening_id->nama");

        return redirect()->route('kode-rekening.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $kode_rekening_id = KodeRekening::findOrFail($request->id);
        $old = $kode_rekening_id->nama;
        $kode_rekening_id->delete();

        toastr()->warning('Data berhasil dihapus!', "$old");

        return redirect()->route('kode-rekening.index');
    }
}