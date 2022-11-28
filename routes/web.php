<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;

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

Route::get("/admin/login", [SecurityController::class, "formLogin"])->name("masuk");
Route::post("/proses-login", [SecurityController::class, "prosesLogin"])->name("proses_login");
Route::get("/logout", [SecurityController::class, "logout"])->name("logout");


Route::get('/admin/register', function () {
    return view('admin.auth.register');
})->name("daftar");

Route::get('/admin/dashboard', function () {
    return view("admin.dashboard");
})->name("dasbor");

Route::get("/admin/user", [UserController::class, "tampil"])->name("user");
Route::get("/admin/user/form", [UserController::class, "formInput"])->name("formulir");
Route::post("/simpan-user", [UserController::class, "simpan"])->name("user_simpan");
Route::get("/admin/user/update/{id}", [UserController::class, "formEdit"])->name("user_edit");
Route::put("/update-user/{id}", [UserController::class, "update"])->name("user_update");
Route::delete("/admin/user/hapus/{id}", [UserController::class, "delete"])->name("user_delete");
Route::get("/admin/user/detail/{id}", [UserController::class, "detail"])->name("user_detail");

Route::get("/admin/guru", [TeacherController::class, "tampil"])->name("guru");
Route::get("/admin/guru/form", [TeacherController::class, "formInput"])->name("guru_formulir");
Route::post("/simpan-guru", [TeacherController::class, "simpan"])->name("guru_simpan");
Route::get("/admin/guru/detail/{id}", [TeacherController::class, "detail"])->name("guru_detail");
Route::get("/admin/guru/update/{id}", [TeacherController::class, "formEdit"])->name("guru_edit");
Route::put("/update-guru/{id}", [TeacherController::class, "update"])->name("guru_update");
Route::delete("/admin/guru/hapus/{id}", [TeacherController::class, "delete"])->name("guru_delete");

Route::get("/admin/siswa", [StudentController::class, "tampil"])->name("siswa");
Route::get("/admin/siswa/form", [StudentController::class, "formInput"])->name("siswa_formulir");
Route::post("/simpan-siswa", [StudentController::class, "simpan"])->name("siswa_simpan");
Route::get("/admin/siswa/detail/{id}", [StudentController::class, "detail"])->name("siswa_detail");
Route::get("/admin/siswa/update/{id}", [StudentController::class, "formEdit"])->name("siswa_edit");
Route::put("/update-siswa/{id}", [StudentController::class, "update"])->name("siswa_update");
Route::delete("/admin/siswa/hapus/{id}", [StudentController::class, "delete"])->name("siswa_delete");

Route::get("/admin/kelas", [ClassController::class, "tampil"])->name("kelas");
Route::get("/admin/kelas/form", [ClassController::class, "formInput"])->name("kelas_formulir");
Route::post("/simpan-kelas", [ClassController::class, "simpan"])->name("kelas_simpan");
Route::get("/admin/kelas/detail/{id}", [ClassController::class, "detail"])->name("kelas_detail");
Route::get("/admin/kelas/update/{id}", [ClassController::class, "formEdit"])->name("kelas_edit");
Route::put("/update-kelas/{id}", [ClassController::class, "update"])->name("kelas_update");
Route::delete("/admin/kelas/hapus/{id}", [ClassController::class, "delete"])->name("kelas_delete");

Route::get("/admin/mapel", [SubjectController::class, "tampil"])->name("mapel");
Route::get("/admin/mapel/form", [SubjectController::class, "formInput"])->name("mapel_formulir");
Route::post("/simpan-mapel", [SubjectController::class, "simpan"])->name("mapel_simpan");
Route::get("/admin/mapel/detail/{id}", [SubjectController::class, "detail"])->name("mapel_detail");
Route::get("/admin/mapel/update/{id}", [SubjectController::class, "formEdit"])->name("mapel_edit");
Route::put("/update-mapel/{id}", [SubjectController::class, "update"])->name("mapel_update");
Route::delete("/admin/mapel/hapus/{id}", [SubjectController::class, "delete"])->name("mapel_delete");
