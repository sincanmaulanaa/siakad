<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function tampil()
    {
        $data_student = Student::all();
        return view("admin.student.student-list")->with("data_student", $data_student);
    }

    public function formInput()
    {
        return view("admin.student.form");
    }

    public function simpan(StudentRequest $request)
    {
        $student = new Student();
        $student->nis = $request->get("nis");
        $student->name = $request->get("name");
        $student->gender = $request->get("gender");
        $student->class = $request->get("class");
        $student->address = $request->get("address");
        $student->save();

        return redirect(route("siswa"));
    }

    public function detail($id)
    {
        $data_student = Student::find($id); // ambil data pada tabel user berdasarkan id
        return view("admin.student.detail")->with("data_student", $data_student); // tampilkan menggunakan view
    }

    public function formEdit($id)
    {
        return view("admin.student.update")->with("id", $id);
    }

    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->nis = $request->get("nis");
        $student->name = $request->get("name");
        $student->gender = $request->get("gender");
        $student->class = $request->get("class");
        $student->address = $request->get("address");
        $student->save();

        return redirect(route("siswa"));
    }

    public function delete($id)
    {
        Student::destroy($id);
        return redirect(route("siswa"));
    }
}
