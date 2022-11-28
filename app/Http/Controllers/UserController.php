<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import user model
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function tampil()
    {
        $data_user = User::all();
        return view("admin.user.user-list")->with("data_user", $data_user);
    }

    public function formInput()
    {
        return view("admin.user.form");
    }

    public function simpan(UserRequest $request)
    {
        $user = new User();
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user"));
    }

    public function formEdit($id)
    {
        return view("admin.user.update")->with("id", $id);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->level = $request->get("level");
        $user->save();

        return redirect(route("user"));
    }

    public function delete($id)
    {
        User::destroy($id);
        return redirect(route("user"));
    }

    public function detail($id)
    {
        $data_user = User::find($id); // ambil data pada tabel user berdasarkan id
        return view("admin.user.detail")->with("data_user", $data_user); // tampilkan menggunakan view
    }
}
