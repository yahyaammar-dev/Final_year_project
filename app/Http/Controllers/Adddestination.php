<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Adddestinationm;
use App\Models\Videos;
use App\Models\Destination_Videos;
use App\Models\hotel;

class Adddestination extends Controller
{
    public function adddestination(Request $req){

        

        //getting and coverting the data
        $data = json_decode($_POST["data"]);

  


        //Inserting the desination
        // $add = new Adddestinationm;
        // $add->destination_id = $data->destination_id;
        // $add->name = $data->name;
        // $add->city = $data->name;
        // $add->coordx = $data->coordx;
        // $add->coordy = $data->coordy;
        // $add->price = $data->price;
        // $add->description = $data->description;
        // $add->type = $data->type;
        // $add->regions = $data->region;
        // $add->weather = $data->weather;
        // $add->save();
        
        //  inserting the videos
        // $videos = $data->videos;
        // $videosids = array();
        // foreach($videos as $video){
        //     $addvideos = new Videos;
        //     //getting the ids
        //     $maxid = videos::select('id')->orderBy('id', 'desc')->first(); 
        //     $maxid = (int)$maxid['id'];
        //     $vid = $maxid+1;
        //     array_push($videosids,$vid);    
        //     //store url
        //     $addvideos->url = $video;
        //     $addvideos->save();
        // }

        // //inserting in destination and videos
        // foreach($videosids as $video){
        //     $destination_videos = new Destination_Videos;
        //     $destination_videos->destination = $id;
        //     $destination_videos->video = $video;
        //     $destination_videos->save();
        // }       


        

       $hotels = $data->hotels;
        $hotelids = array();
          foreach($hotels as $item){
            $maxid = hotel::select('id')->orderBy('id', 'desc')->first(); 
            $maxid = (int)$maxid['id'];
            $hid = $maxid+1;
            array_push($hotelids,$hid);
            $addh = new hotel;
            $addh->name = $item[0];
            $addh->description = $item[1];
            $addh->price = $item[2];
            $addh->phone = $item[3];
            $addh->coordx = $item[4];
            $addh->coordy = $item[5];
            $addh->save();
            }


            $hotelv = $data->hotelvideos;           


            for($i=0; $i<count($hotelids); $i++){
                for($j=0; $j<count($hotelv); $j++){
                    if( $i == $hotelv[$j][0] ){
                        print_r($hotelv[$j][1]);
                    }
                }
            }



            // print_r($hotelv);
            


        

        //return redirect('adddestination');

    }
}