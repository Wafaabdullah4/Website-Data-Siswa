<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelas = kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = kelas::all();
        return view('kelas.create', compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kls' => 'required',
            'n_kls' => 'required',
            'ruangan' => 'required',
            'wakel' => 'required'
        ]);

        $kelas = new Kelas;
        $kelas->kls = $request->kls;
        $kelas->n_kls = $request->n_kls;
        $kelas->ruangan = $request->ruangan;
        $kelas->wakel = $request->wakel;


        $kelas->save();
        return redirect('/kelas');
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
        $kelas = kelas::findOrFail($id);
        return view('kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kls' => 'required',
            'n_kls' => 'required',
            'ruangan' => 'required',
            'wakel' => 'required',
        ]);

        $kelas = kelas::findOrFail($id);
        $kelas->kls = $request->kls;
        $kelas->n_kls = $request->n_kls;
        $kelas->ruangan = $request->ruangan;
        $kelas->wakel = $request->wakel;

        $kelas->save();
        return redirect()->route('kelas.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kelas = kelas::findOrFail($id);
        $kelas->delete();
        return redirect()->route('kelas.index');
    }



    public function cari(Request $request)
    {
        $keyword = $request->input('cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $kelas = kelas::where('n_kls', 'like', "%" . $keyword . "%")->paginate(10);


        // mengirim data pegawai ke view index
        return view('kelas.index', compact('kelas'));
    }
}
