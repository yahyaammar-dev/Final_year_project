<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel_Images;
use App\Models\hotel;
use App\Models\Images;


class hotellisting extends Controller
{
    
    public function hotellisting(){

        $src = hotel::select('id','name','description','price','phone')->get();
    
        $imageIds=[];
        foreach($src as $item){
            $imageId = Hotel_Images::select('images')->where('hotel',$item['id'])->get();
            array_push($imageIds,$imageId);
        }
    
        $images = [];
        foreach($imageIds as $id){
            $image = Images::select('url')->where('images_id',$id[0]["images"])->get();
            array_push($images, $image);
        }
        
        $data['hotel']= $src ;
        $data['images'] = $images;
    
        return view('hotellisting',['data'=>$data]);   
 
    }
}