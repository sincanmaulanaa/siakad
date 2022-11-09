<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name("masuk");

Route::get('/admin/register', function () {
    return view('admin.auth.register');
})->name("daftar");

Route::get('/admin/dashboard', function () {
    return view("admin.dashboard");
})->name("dasbor");

Route::get("/admin/postingan", [UserController::class, "tampil"])->name("postingan");
Route::get("/admin/form", [UserController::class, "formInput"])->name("formulir");
Route::post("/simpan-user", [UserController::class, "simpan"])->name("user_simpan");

Route::get("/admin/postingan/update/{id}", [UserController::class, "formEdit"])->name("user_edit");
Route::put("/update-user/{id}", [UserController::class, "update"])->name("user_update");
Route::delete("/admin/postingan/hapus/{id}", [UserController::class, "delete"])->name("user_delete");

Route::get("/admin/postingan/detail/{id}", [UserController::class, "detail"])->name("user_detail");
