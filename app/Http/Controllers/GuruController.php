<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\guru;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class guruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::all();
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $guru = Guru::all();
        return view('guru.create', compact('guru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'n_guru' => 'required',
            'n_wakel' => 'required',
            'jenis_kelamin' => 'required',
            'mapel' => 'required',
        ]);

        $guru = new Guru;
        $guru->n_guru = $request->n_guru;
        $guru->n_wakel = $request->n_wakel;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->mapel = $request->mapel;
        $guru->save();
        return redirect('/guru');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'n_guru' => 'required',
            'n_wakel' => 'required',
            'jenis_kelamin' => 'required',
            'mapel' => 'required',
        ]);

        $guru = Guru::findOrFail($id);
        $guru->n_guru = $request->n_guru;
        $guru->n_wakel = $request->n_wakel;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->mapel = $request->mapel;

        $guru->save();
        return redirect('/guru');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect()->route('guru.index');
    }

    // public function cetak()
    // {
    //     $guru = guru::all();

    //     $pdf = PDF::loadview('cetak', ['guru' => $guru]);
    //     return $pdf->download('laporan.pdf');
    // }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $guru = guru::where('n_guru', 'like', "%" . $keyword . "%")->paginate(10);


        // mengirim data pegawai ke view index
        return view('guru.index', compact('guru'));
    }
}
