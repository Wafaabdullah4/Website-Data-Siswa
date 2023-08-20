<?php

use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StuderController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:teacher'])->group(function () {

    Route::get('/teacher/home', [HomeController::class, 'teacherHome'])->name('teacher.home');
});


// Route student controller untuk data siswa
Route::resource('/student', StudentController::class);
Route::resource('/students', TeacherController::class);
Route::resource('/studer', StuderController::class);

// Route kelas controller untuk data kelas
Route::resource('/kelas', KelasController::class);

// Route guru controller untuk data guru
Route::resource('/guru', GuruController::class);


// Membuat router mencetak datasiswa dan cari data siswa
Route::get('/cetak', [StudentController::class, 'cetak'])->name('student.cetak');

Route::get('/search', [StudentController::class, 'cari'])->name('student.cari');

//Membuat router cari data kelas
Route::get('/search/kelas', [KelasController::class, 'cari'])->name('kelas.cari');

//membuat router cari data guru
Route::get('/search/guru', [guruController::class, 'cari'])->name('guru.cari');

//Membuat router cetak data siswa untuk guru
Route::get('/cari/siswa', [TeacherController::class, 'cari'])->name('students.cari');
Route::get('/cetak/siswa', [TeacherController::class, 'cetak'])->name('students.cetak');

//Membuat router cari data siswa untuk siswa
Route::get('/cari/siswa/siswa', [StuderController::class, 'cari'])->name('studer.cari');
