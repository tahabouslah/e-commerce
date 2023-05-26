<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(Request $req) {
        $user =  User::where(['email'=>$req->mail])->first();
        if(!$user || !Hash::check($req->pw, $user->password)){
            return "User not found";
        }else {
            $req->session()->put("user",$user);
            return redirect("/");
        }

    }
}
