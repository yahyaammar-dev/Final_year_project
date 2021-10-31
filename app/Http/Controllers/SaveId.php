<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaveId extends Controller
{
    public function Save(REQUEST $req){
        $req->session()->put('id',$req->id);
        return $req->session()->get('id');
    }
}
