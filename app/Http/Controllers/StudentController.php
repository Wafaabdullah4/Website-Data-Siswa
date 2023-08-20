<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = Student::all();
        return view('student.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
        ]);

        $student = new Student;
        $student->nama = $request->nama;
        $student->kelas = $request->kelas;
        $student->jk = $request->jk;

        $student->save();
        return redirect('/student');
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
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jk' => 'required',
        ]);

        $student = Student::findOrFail($id);
        $student->nama = $request->nama;
        $student->kelas = $request->kelas;
        $student->jk = $request->jk;

        $student->save();
        return redirect('/student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }

    // public function cetak()
    // {
    //     $student = Student::all();

    //     $pdf = PDF::loadview('cetak', ['student' => $student]);
    //     return $pdf->download('laporan.pdf');
    // }

    public function cetak()
    {
        $student = Student::all();

        $pdf = PDF::loadview('student.cetak', ['student' => $student]);
        return $pdf->download('Data_siswa.pdf');
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $student = Student::where('nama', 'like', "%" . $keyword . "%")->paginate(10);


        // mengirim data pegawai ke view index
        return view('student.index', compact('student'));
    }
}
