<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addtocartm;
use App\Models\product;
use App\Models\freelancer;
use App\Models\Adddestinationm;
use DB;

class calculatecart extends Controller
{
    public function calculatecart(){

        //get the id
        $user =  session("user");
        $id =  $user["id"];

        //getting the ids
        $destinations = DB::table("cart")->where(["user_id"=>$id, "item_type"=>"destination"])->get();
        $des_id = [];
        foreach($destinations as $d){
            array_push($des_id, $d->id);
        }
        $products = DB::table("cart")->where(["user_id"=>$id, "item_type"=>"products"])->get();
        $pro_id = [];
        foreach($products as $d){
            array_push($pro_id, $d->id);
        }
        $freelancers = DB::table("cart")->where(["user_id"=>$id, "item_type"=>"freelancers"])->get();
        $free_id = [];
        foreach($freelancers as $d){
            array_push($free_id, $d->id);
        }
        
        //getting the data
        $destinations_arr = [];
        foreach($des_id as $d){
            $row = DB::table("destinations")->where(["destination_id"=>$d])->get();
            array_push($destinations_arr, $row);
        }
        $products_arr = [];
        foreach($pro_id as $d){
            $row = DB::table("product")->where(["id"=>$d])->get();
            array_push($products_arr, $row);
        }
        $freelancer_arr = [];
        foreach($free_id as $d){
            $row = DB::table("freelancer")->where(["id"=>$d])->get();
            array_push($freelancer_arr, $row);
        }
        
        //sending it to view
        return view("addtocart",[
            "destination"=>$destinations_arr,
            "product"=>$products_arr,
            "freelancer"=>$freelancer_arr
        ]);
    }
}
