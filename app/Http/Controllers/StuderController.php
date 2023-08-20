<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StuderController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('studer.index', compact('student'));
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');
        // mengambil data dari table pegawai sesuai pencarian data
        $student = Student::where('nama', 'like', "%" . $keyword . "%")->paginate(10);


        // mengirim data pegawai ke view index
        return view('studer.index', compact('student'));
    }
}
