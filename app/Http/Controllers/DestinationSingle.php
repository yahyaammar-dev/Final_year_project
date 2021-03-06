<?php

namespace App\Http\Controllers;
use App\Models\Adddestinationm;
use App\Models\Destination_Videos;
use App\Models\Videos;
use App\Models\Images;
use App\Models\Destination_images;
use App\Models\Laws;
use App\Models\Destination_laws;
use App\Models\Destination_Reviews;
use App\Models\Reviews;
use App\Models\contact;
use App\Models\destination_contact;
use App\Models\destination_blog;
use App\Models\blog;
use App\Models\blog_author;
use App\Models\blog_category;
use App\Models\blog_image;
use App\Models\product;
use App\Models\destination_product;
use App\Models\hotel;
use App\Models\destination_hotel;
use App\Models\destination_freelancer;
use App\Models\ProductImages;
use App\Models\Hotel_Images;
use App\Models\FreelancerImages;
use App\Models\freelancer;




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
            $src = Laws::select('type','content')->where('id',$laws[$i]["laws"])->get();
            $lawItem[$i] = $src;
         }
        //Reviews of destinations
        $reviews = Destination_Reviews::select('review')->where('destination',$sid)->get();
        $reviewItem = [];
        for($i=0; $i<count($reviews); $i++){
            $src = Reviews::select('author','text','type','rating')->where('review_id',$reviews[$i]["review"])->get();
            $reviewItem[$i] = $src;
        }
        //Contacts of destinations
        $contacts = destination_contact::select('contact')->where('destination',$sid)->get();
        $contactItem = [];
        for($i=0; $i<count($contacts); $i++){
            $src = contact::select('name','contact_no','type','city','description')->where('id',$contacts[$i]["contact"])->get();
            $contactItem[$i] = $src;
        }
        //Blogs
        $blogs = destination_blog::select('blog')->where('destination',$sid)->get();
        $blogItem = [];
        for($i=0; $i<count($blogs); $i++){
            $srce = blog::select('blog_id','name','author','category','content')->where('blog_id',$blogs[$i]["blog"])->get();
            $author = blog_author::select('name')->where('id',$srce[0]['author'])->get();
            $imageId = blog_image::select('image_id')->where('blog_id',$srce[0]['blog_id'])->get();
            $image = Images::select('url')->where('images_id',$imageId[0]["image_id"])->get();
            $category = blog_category::select('name')->where('cat_id',$srce[0]['category'])->get();
            $srce[0]['author']= $author;
            $srce['image']= $image;
            $srce[0]['category']= $category;
            $blogItem[$i] = $srce;         
        }
  
        
    
        //Products of destinations
        $products = destination_product::select('product')->where('destination',$sid)->get();

        $productItem = [];
        for($i=0; $i<count($products); $i++){            
            $data = product::select('id','name','description','price','type')->where('id',$products[$i]["product"])->get();
            
            

         
            if(count($data)>0){
                $imageId = ProductImages::select('images')->where('product',$data[0]['id'])->get();
        
                if(count($imageId)>0){
               
                    $image = Images::select('url')->where('images_id',$imageId[0]["images"])->get();




                    
            $srcee[$i]['image']= $image;
            $srcee[$i]['data']= $data;
            $productItem[$i] = $srcee;
                }        
    
        
            }

            
        




        }



        //Hotels of destinations
        $hotels = destination_hotel::select('hotel')->where('destination',$sid)->get();
        $hotelItem = [];
        for($i=0; $i<count($hotels); $i++){
            $src = hotel::select('id','name','description','price','phone','coordx','coordy')->where('id',$hotels[$i]["hotel"])->get();
            $imageId = Hotel_Images::select('images')->where('hotel',$src[0]['id'])->get();
            $image = Images::select('url')->where('images_id',$imageId[0]["images"])->get();
            $src["image"]=$image;
            $hotelItem[$i] = $src;
        }
        //Freelancers of destinations
        $freelancers = destination_freelancer::select('freelancer')->where('destination',$sid)->get();
        $freelancerItem = [];
        for($i=0; $i<count($freelancers); $i++){
            $src = freelancer::select('id','name','description','price','type')->where('id',$freelancers[$i]["freelancer"])->get();
            $imageId = FreelancerImages::select('images')->where('freelancer',$src[0]['id'])->get();
            $image = Images::select('url')->where('images_id',$imageId[0]["images"])->get();
            $src["image"]=$image;
            $freelancerItem[$i] = $src;
        }



     

        return view('destinations', [
             'id'=>$sid,
             'dataa'=>$dataa,
             'videos'=>$videoItem,
             'images'=>$imageItem,
             'laws'=>$lawItem,
             'review'=>$reviewItem,
             'contact'=>$contactItem,
             'blog'=>$blogItem,
             'product'=>$productItem,
             'hotel'=>$hotelItem,
             'freelancer'=>$freelancerItem
            ]);
    }
}