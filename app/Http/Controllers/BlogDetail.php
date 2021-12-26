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

class BlogDetail extends Controller
{
    public function BlogDetail(Request $req, $unique){
        // Id of hotel
        if(isset($unique)){
            $id= $unique;
        }else{
            $id = $req["id"];
        }  
        // Blog Content
        $blogcontent = DB::table('blog_posts')->where('blog_id', $id)->pluck('author','category','content','name');
        // fetching author
        $author = DB::table('blog_author')->where('id', $blogcontent["author"])->pluck('name'); 
        // fetching category
        $category = DB::table('blog_category')->where('cat_id', $blogcontent["category"])->pluck('name'); 
                
        // hotel images
        $hotelimages = DB::table('hotel_images')->where('hotel', $id)->pluck('images');
        $hoteli = [];
        foreach($hotelimages as $item){
            $images = DB::table('images')->where('images_id',$item)->pluck('url');
            array_push($hoteli,$images);
        }

        // building the array 
        return view('freelanersingle', [
            'id'=>$id,
            'blogcontent'=>$blogcontent,
            'author'=>$author,
            'images'=>$hoteli,
            'category'=>$category
           ]);
    }
}


        
        
 
  

        
        