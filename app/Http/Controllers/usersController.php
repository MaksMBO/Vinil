<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Users;
use phpDocumentor\Reflection\Element;


class usersController extends Controller
{
    public function submit(Request $request)
    {
        $user = new Users();
        $user->login = $request->input("login");
        $user->email = $request->input("email");

        if (!$request->input("password_confirm")) {
            return "password not";
        }
        if ($request->input("password_confirm") != $request->input("password")) {
            return "password wrong";
        }

        $user->password = md5($request->input("password"));

        $user->save();
        return redirect()->route('login');
    }

    public function allData(Request $request)
    {
        $user = new Users();

        if ($user->where('login', '=', $request->input("login"))->where('password', '=', md5($request->input("password")))->doesntExist()) {
            return "incorrectly";
        }

        return redirect()->route('lending');


    }
}
