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
    if($products)
    {
    foreach ($products as $key => $product) {
    $output.='<tr>'.
    '<td>'. '<p style="display: none;">' .$product->destination_id . '</p>' . $product->name.'</td>'.
    '</tr>';
    }
    return Response($output);
       }
       }
    }
}


