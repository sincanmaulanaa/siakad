<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Http\Requests\TeacherRequest;

class TeacherController extends Controller
{
    public function tampil()
    {
        $data_teacher = Teacher::all();
        return view("admin.teacher.teacher-list")->with("data_teacher", $data_teacher);
    }

    public function formInput()
    {
        return view("admin.teacher.form");
    }

    public function simpan(TeacherRequest $request)
    {
        $teacher = new Teacher();
        $teacher->nip = $request->get("nip");
        $teacher->name = $request->get("name");
        $teacher->gender = $request->get("gender");
        $teacher->address = $request->get("address");
        $teacher->save();

        return redirect(route("guru"));
    }

    public function detail($id)
    {
        $data_teacher = Teacher::find($id); // ambil data pada tabel user berdasarkan id
        return view("admin.teacher.detail")->with("data_teacher", $data_teacher); // tampilkan menggunakan view
    }

    public function formEdit($id)
    {
        return view("admin.teacher.update")->with("id", $id);
    }

    public function update(TeacherRequest $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->nip = $request->get("nip");
        $teacher->name = $request->get("name");
        $teacher->gender = $request->get("gender");
        $teacher->address = $request->get("address");
        $teacher->save();

        return redirect(route("guru"));
    }

    public function delete($id)
    {
        Teacher::destroy($id);
        return redirect(route("guru"));
    }
}
