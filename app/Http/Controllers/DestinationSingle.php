<?php

namespace App\Http\Controllers;
use App\Models\Adddestinationm;
use App\Models\Destination_Videos;
use App\Models\Videos;

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

        return view('destinations', [
             'id'=>$sid,
             'dataa'=>$dataa,
             'videos'=>$videoItem
         ]);
    }
}