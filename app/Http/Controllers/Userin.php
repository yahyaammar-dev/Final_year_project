<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinm;
use Illuminate\Support\Facades\DB;

class Userin extends Controller
{
    public function insertUser(Request $req){
        $Userinm = new Userinm;
        $Userinm->name= $req->name;
        $Userinm->email= 'ijk';
        $Userinm->pass= 'geh';
        $Userinm->phone= 'def';
        $Userinm->account_status= 'abc';
        $Userinm->save();
        return redirect('login');
    }
}