<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\hotel;
use App\Models\images;
use App\Models\Hotel_Images;
use App\Models\Videos;
use App\Models\Hotel_Videos;
use App\Models\Reviews;
use App\Models\Destination_images;
use App\Models\product;
use DB;

class ProductDetail extends Controller
{
    public function ProductDetail(Request $req, $unique){

        // Id of hotel
        if(isset($unique)){
            $id= $unique;
        }else{
            $id = $req["id"];
        }
        // product videos
        $productvideos = DB::table('product_videos')->where('product', $id)->pluck('video');
        $productv = [];
        foreach($productvideos as $item){
            $videos = DB::table('videos')->where('id',$item)->pluck('url');
            array_push($productv,$videos);
        }
      
        // product images
        $prodcutimages = DB::table('product_images')->where('product', $id)->pluck('images');
        $producti = [];
        foreach($prodcutimages as $item){
            $images = DB::table('images')->where('images_id',$item)->pluck('url');
            array_push($producti,$images);
        }
        // product detail
        $data = product::select('id','name','description','price','type')->where('id',$id)->get();
        // hotel reviews
        $productreviews = DB::table('product_reviews')->where('product', $id)->pluck('review');
        $productr = [];
        foreach($productreviews as $item){
            $reviews = Reviews::select('text','rating','author','email')->where('review_id',$item)->get();
            array_push($productr,$reviews);
        }
        // building the array 
        return view('productdetail', [
            'id'=>$id,
            'data'=>$data,
            'videos'=>$productv,
            'images'=>$producti,
            'review'=>$productr
           ]);
    }
}