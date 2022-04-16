<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class checkemail extends Controller
{
    public function checkemail(REQUEST $req){
        $user = User::where('email', '=', $req->email)->first();
        if($user){
            echo "Email exists";
        }else{
            echo "Email doesn't exists";
        }
    }
}
