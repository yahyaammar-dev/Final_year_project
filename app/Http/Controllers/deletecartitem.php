<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\addtocartm;
use DB;

class deletecartitem extends Controller
{
    public function deletecartitem(REQUEST $req){
        $itemid = $req["id"];
        $userid = session('user');
        DB::enableQueryLog(); 
        $destinations = DB::table("cart")->where(["user_id"=>$userid["id"], "item_id"=>$itemid])->delete();
        print_r(DB::getQueryLog());
    }
}
