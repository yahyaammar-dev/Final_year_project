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
use App\Models\blog;
use App\Models\blog_image;
use App\Models\category;
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
        $blogcontent = blog::select('author','category','content','name')->where('blog_id', $id)->get();
        // fetching author
        $author = DB::table('blog_author')->where('id', $blogcontent[0]["author"])->pluck('name'); 
        // fetching category
       
        $cat = category::select('name')->where('cat_id', $blogcontent[0]["category"])->get(); 

        // blog images
        $blog_image = blog_image::select('image_id')->where('blog_id', $id)->get();
        $blogi = [];
        foreach($blog_image as $item){
            $images = DB::table('images')->where('images_id',$item)->pluck('url');
            array_push($blogi,$images);
        }

        // building the array 
        return view('blogdetail', [
            'id'=>$id,
            'blogcontent'=>$blogcontent,
            'author'=>$author,
            'images'=>$blogi,
            'category'=>$cat
           ]);
    }
}