<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $userName = $request->username;
        $password = $request->password;

        return User::where("name", $userName)->where("password", hash("md5", $password))->get()[0]->token;
        
    }
}
