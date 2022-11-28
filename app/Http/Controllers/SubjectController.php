<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Http\Requests\SubjectRequest;

class SubjectController extends Controller
{
    public function tampil()
    {
        $data_subject = Subject::all();
        return view("admin.subject.subject-list")->with("data_subject", $data_subject);
    }

    public function formInput()
    {
        return view("admin.subject.form");
    }

    public function simpan(SubjectRequest $request)
    {
        $subject = new Subject();
        $subject->name = $request->get("name");
        $subject->save();

        return redirect(route("mapel"));
    }

    public function detail($id)
    {
        $data_subject = Subject::find($id); // ambil data pada tabel user berdasarkan id
        return view("admin.subject.detail")->with("data_subject", $data_subject); // tampilkan menggunakan view
    }

    public function formEdit($id)
    {
        return view("admin.subject.update")->with("id", $id);
    }

    public function update(SubjectRequest $request, $id)
    {
        $subject = Subject::find($id);
        $subject->name = $request->get("name");
        $subject->save();

        return redirect(route("mapel"));
    }

    public function delete($id)
    {
        Subject::destroy($id);
        return redirect(route("mapel"));
    }
}
