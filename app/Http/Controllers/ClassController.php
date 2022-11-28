<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Http\Requests\ClassRequest;

class ClassController extends Controller
{
    public function tampil()
    {
        $data_class = Classes::all();
        return view("admin.class.class-list")->with("data_class", $data_class);
    }

    public function formInput()
    {
        return view("admin.class.form");
    }

    public function simpan(ClassRequest $request)
    {
        $class = new Classes();
        $class->classname = $request->get("classname");
        $class->save();

        return redirect(route("kelas"));
    }

    public function detail($id)
    {
        $data_class = Classes::find($id); // ambil data pada tabel user berdasarkan id
        return view("admin.class.detail")->with("data_class", $data_class); // tampilkan menggunakan view
    }

    public function formEdit($id)
    {
        return view("admin.class.update")->with("id", $id);
    }

    public function update(ClassRequest $request, $id)
    {
        $class = Classes::find($id);
        $class->classname = $request->get("classname");
        $class->save();

        return redirect(route("kelas"));
    }

    public function delete($id)
    {
        Classes::destroy($id);
        return redirect(route("kelas"));
    }
}
