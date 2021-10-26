<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Calculatereviews extends Controller
{
    public function Calculate(Request $req){
        $reviews = DB::table('destination_reviews')->where('destination',$req->id)->pluck('review');
        $data = array();
        $i=0;
        foreach ($reviews as $review) {
            $data[$i] = DB::table('reviews')->where('review_id', $review)->pluck('rating');
            $i++;
        }

        $sum = 0;
        for($j=0; $j<count($data); $j++){
             $sum += $data[$j][0];
        }
        if($sum!=0){
            echo $sum/(count($data));
        }else{
            echo 0;
        }
        
    }
}
