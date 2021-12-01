<?php

namespace App\Http\Controllers;
use App\Models\Adddestinationm;
use App\Models\Destination_Videos;
use App\Models\Videos;
use App\Models\Images;
use App\Models\Destination_images;
use App\Models\Laws;
use App\Models\Destination_laws;

use Illuminate\Http\Request;

class DestinationSingle extends Controller
{
    public function SingleDestination(REQUEST $req){
        // id of destination
        $sid = $req->session()->get('id');
        // data of destination
        $dataa = Adddestinationm::all()->where('destination_id', $sid);
        // videos of destination   
        $vid = Destination_Videos::select('video')->where('destination',$sid)->get();
        $videoItem = [];
        for($i=0; $i<count($vid); $i++){
           $src = Videos::select('url')->where('id',$vid[$i]["video"])->get();
           $videoItem[$i] = $src;
        }
        //images of destination
        $img = Destination_images::select('image_id')->where('destination_id',$sid)->get();
        $imageItem = [];
        for($i=0; $i<count($img); $i++){
           $src = Images::select('url')->where('images_id',$img[$i]["image_id"])->get();
           $imageItem[$i] = $src;
        }
        //laws of destination
        $laws = Destination_laws::select('laws')->where('destination',$sid)->get();
        $lawItem = []; 
        for($i=0; $i<count($laws); $i++){
            $src = Laws::select('content')->where('id',$laws[$i]["id"])->get();
            $lawItem[$i] = $src;
         }
 
        return view('destinations', [
             'id'=>$sid,
             'dataa'=>$dataa,
             'videos'=>$videoItem,
             'images'=>$imageItem,
             'laws'=>$lawItem
         ]);
    }
}