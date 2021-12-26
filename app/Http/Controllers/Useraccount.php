<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinm;
use Illuminate\Support\Facades\DB;

class Useraccount extends Controller
{
    public function Showaccount(){






        $user = session('user');

        echo $user;

        return view('useraccount',['user'=>$user]);
    }
}