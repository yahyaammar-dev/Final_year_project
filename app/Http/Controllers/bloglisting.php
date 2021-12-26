<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog_image;
use App\Models\blog;
use App\Models\Images;


class bloglisting extends Controller
{
    
    public function bloglisting(){
        $src = blog::select('blog_id','author','category','content','name')->get();
    

        $imageIds=[];
        foreach($src as $item){
            $imageId = blog_image::select('image_id')->where('blog_id',$item['blog_id'])->get();
            array_push($imageIds,$imageId);
        }
    

      

        $images = [];
        foreach($imageIds as $id){
            $image = Images::select('url')->where('images_id',$id[0]["image_id"])->get();
            array_push($images, $image);
        }
        


        $data['blog']= $src ;
        $data['images'] = $images;
    
        return view('bloglisting',['data'=>$data]);
        
    



    }

}
