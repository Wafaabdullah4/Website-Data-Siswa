<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;

class TeacherController extends Controller
{

    public function index()
    {
        $student = Student::all();
        return view('students.index', compact('student'));
    }
    public function cetak()
    {
        $student = Student::all();

        $pdf = FacadePdf::loadview('students.cetak', ['student' => $student]);
        return $pdf->download('Data_siswa.pdf');
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $student = Student::where('nama', 'like', "%" . $keyword . "%")->paginate(10);


        // mengirim data pegawai ke view index
        return view('students.index', compact('student'));
    }
}
