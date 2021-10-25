<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function register(Request $req){

        $user = new Users;
        
        $user-> email = $req->input('email');
        $user-> password= Hash::make($req->input('password'));
        $user->save();
        
        return $user;
    }
}
