<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;

        return User::where("name", $username)->where("password", hash("md5", $password))->get()[0]->token;
        
    }
}
