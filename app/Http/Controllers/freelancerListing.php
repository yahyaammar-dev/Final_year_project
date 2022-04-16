<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FreelancerImages;
use App\Models\freelancer;
use App\Models\Images;

class freelancerListing extends Controller
{


    public function freelancerListing(){


        
    $src = freelancer::select('id','name','description','price','type')->get();

    

    $imageIds=[];
    foreach($src as $item){
        if(empty($item)){
            
        }else{
            $imageId = FreelancerImages::select('images')->where('freelancer',$item['id'])->get();
            array_push($imageIds,$imageId);
        }
    }

    $images = [];
    foreach($imageIds as $id){
        if(count($id)==0){
            
        }else{
        $image = Images::select('url')->where('images_id',$id[0]["images"])->get();
        array_push($images, $image);
        }
    }
    
    $data['freelancer']= $src ;
    $data['images'] = $images;

    return view('freelancerlisting',['data'=>$data]);
    
    
     // $src["image"]=$image;
    // $freelancerItem[$i] = $src;




    }

}
