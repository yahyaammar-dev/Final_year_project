<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class SearchController extends Controller
{

    public function search(Request $request)
    {
    if($request->ajax())
    {
    $output="";
    $products=DB::table('destinations')->where('name','LIKE','%'.$request->search."%")->get();
    
    $arr = [];
    
    if($products)
    {
    foreach ($products as $key => $product) {
     
        $arr[] = $product;

    }
    return Response($arr);
       }
       }
    }
}


