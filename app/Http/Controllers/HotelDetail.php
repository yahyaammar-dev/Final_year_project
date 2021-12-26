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
use DB;

class HotelDetail extends Controller
{
    public function HotelDetail(Request $req, $unique){


        
        
        // Id of hotel
        if(isset($unique)){
            $id= $unique;
        }else{
            $id = $req["id"];
        }        
        // hotel videos
        $hotelvideos = DB::table('hotel_videos')->where('hotel', $id)->pluck('video');
        $hotelv = [];
        foreach($hotelvideos as $item){
            $videos = DB::table('videos')->where('id',$item)->pluck('url');
            array_push($hotelv,$videos);
        }
        // hotel images
        $hotelimages = DB::table('hotel_images')->where('hotel', $id)->pluck('images');
        $hoteli = [];
        foreach($hotelimages as $item){
            $images = DB::table('images')->where('images_id',$item)->pluck('url');
            array_push($hoteli,$images);
        }
        // hotel detail
        $data = hotel::select('id','name','description','price','phone','coordx','coordy')->where('id',$id)->get();
        // hotel reviews
        $hotelreviews = DB::table('hotel_reviews')->where('hotel', $id)->pluck('review');
       
        $hotelr = [];
        foreach($hotelreviews as $item){
            
            $reviews = Reviews::select('text','rating','author','email')->where('review_id',$item)->get();
            array_push($hotelr,$reviews);
        }

        // building the array 
        return view('hotelsingle', [
            'id'=>$id,
            'data'=>$data,
            'videos'=>$hotelv,
            'images'=>$hoteli,
            'review'=>$hotelr
           ]);
    }
}