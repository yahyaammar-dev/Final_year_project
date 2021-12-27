<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addtocartm;


class addtocart extends Controller
{
    function addtocart(Request $req){
       $itemid = $req["info"]["id"];
       $itemtype = $req["info"]["type"];
       $user = session("user"); 


        $add = new addtocartm;
        $add->item_type = $itemtype;
        $add->item_id = $itemid;
        $add->user_id = $user["id"];
        $add->save();
    }
}
