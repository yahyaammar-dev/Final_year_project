<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adddestinationm;


class filterdestination extends Controller
{
    public function Listdestinations(Request $req){
        for ($i=0; $i<count($req['info']); $i++){
            $dest[i] = Adddestinationm::all()->where('type', $req['info'][$i]);
        }
        return $dest;
    }
}