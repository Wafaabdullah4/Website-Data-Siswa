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
}
