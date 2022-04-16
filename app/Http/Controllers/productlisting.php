<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\ProductImages;
use App\Models\product;
use App\Models\Images;


class productlisting extends Controller
{
    public function productlisting(){
    

        $src = product::select('id','name','description','price','type')->get();
    
        
    
        $imageIds=[];
        foreach($src as $item){
            $imageId = ProductImages::select('images')->where('product',$item['id'])->get();
            array_push($imageIds,$imageId);
        }
    
        
        $images = [];
        foreach($imageIds as $id){
            if(!count($id)==0){
                $image = Images::select('url')->where('images_id',$id[0]["images"])->get();
                array_push($images, $image);
            }
        }



        
        $data['product']= $src ;
        $data['images'] = $images;
    
        return view('productlisting',['data'=>$data]);
        
    


    }
}



