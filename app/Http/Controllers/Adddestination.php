<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adddestinationm;
use Illuminate\Support\Facades\DB;

class Adddestination extends Controller
{
    public function adddestination(Request $req){
        $add = new Adddestinationm;
        $add->name = $req->name;
        $add->price = $req->price;
        $add->coordx = $req->coordx;
        $add->coordy = $req->coordy;
        $add->description = $req->description;
        $add->type = $req->type;
        $add->save();
        return redirect('adddestination');
    }
}