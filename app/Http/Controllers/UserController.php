<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import user model

class UserController extends Controller
{
    public function tampil()
    {
        $dataUser = User::all();
        echo $dataUser;
    }
}
