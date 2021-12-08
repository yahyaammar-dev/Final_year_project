<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adddestinationm;



class CalculateId extends Controller
{
    public function CalculateId(REQUEST $req){
        $maxid = Adddestinationm::select('destination_id')->orderBy('destination_id', 'desc')->first(); 
        $maxid = (int)$maxid['destination_id'];
        $id = $maxid+1;

        $req->session()->put('newid',$id);

        echo $id;


    }
}
