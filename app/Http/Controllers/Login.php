<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinm;

class Login extends Controller
{
    function loginuser(Request $request){
        $users = Userinm::where('email', '=', $request->email)->where('pass', '=', $request->pass)->get();
        if( !$users->count()){
            return redirect('login');
        }else{
            $request->session()->put('user',$users[0]);
            return redirect('useraccount');
        }
    }
}