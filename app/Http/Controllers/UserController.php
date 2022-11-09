<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import user model

class UserController extends Controller
{
    public function tampil()
    {
        $data_user = User::all();
        return view("admin.postingan")->with("data_user", $data_user);
    }

    public function formInput()
    {
        return view("admin.form");
    }

    public function simpan(Request $request)
    {
        $user = new User();
        $user->name = $request->get("name");
        $user->username = $request->get("username");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->save();

        return redirect(route("postingan"));
    }

    public function formEdit($id)
    {
        return view("admin.update")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get("name");
        $user->username = $request->get("username");
        $user->email = $request->get("email");
        $user->password = $request->get("password");
        $user->save();

        return redirect(route("postingan"));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect(route("postingan"));
    }

    public function detail($id)
    {
        $data_user = User::find($id); // ambil data pada tabel user berdasarkan id
        return view("admin.detail")->with("data_user", $data_user); // tampilkan menggunakan view
    }
}
