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
use App\Models\freelancer;
use DB;

class FreelancerDetail extends Controller
{
    public function FreelancerDetail(Request $req, $unique){


        // Id of hotel
        if(isset($unique)){
            $id= $unique;
        }else{
            $id = $req["id"];
        }
        // hotel videos
        $freelancervideos = DB::table('freelancer_videos')->where('freelancer', $id)->pluck('videos');
        $freelancerv = [];
        foreach($freelancervideos as $item){
            $videos = DB::table('videos')->where('id',$item)->pluck('url');
            array_push($freelancerv,$videos);
        }
        // freelancer images
        $freelancerimages = DB::table('freelancer_images')->where('freelancer', $id)->pluck('images');
        $freelanceri = [];
        foreach($freelancerimages as $item){
            $images = DB::table('images')->where('images_id',$item)->pluck('url');
            array_push($freelanceri,$images);
        }
        // freelancer detail
        $data = freelancer::select('id','name','description','price','type')->where('id',$id)->get();
        // freelancer reviews
        $freelancerreviews = DB::table('freelancer_reviews')->where('freelancer', $id)->pluck('reviews');
        $freelancerr = [];
        foreach($freelancerreviews as $item){
            $reviews = Reviews::select('text','rating','author','email')->where('review_id',$item)->get();
            array_push($freelancerr,$reviews);
        }
        // building the array 
        return view('freelancerdetail', [
            'id'=>$id,
            'data'=>$data,
            'videos'=>$freelancerv,
            'images'=>$freelanceri,
            'review'=>$freelancerr
           ]);
    }
}