<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Adddestinationm;
use App\Models\Videos;
use App\Models\Destination_Videos;
use App\Models\hotel;
use App\Models\Hotel_Videos;
use App\Models\Hotel_Images;
use App\Models\Images;
use App\Models\freelancer;
use App\Models\destination_freelancer;
use App\Models\freelancer_videos;
use App\Models\FreelancerImages;
use App\Models\destination_product;
use App\Models\product;
use App\Models\ProductVideos;
use App\Models\ProductImages;
use App\Models\Destination_laws;
use App\Models\Laws;
use App\Models\contact;
use App\Models\destination_contact;

class Adddestination extends Controller
{
    public function adddestination(Request $req){

        

        //getting and coverting the data
        $data = json_decode($_POST["data"]);

  


        //Inserting the desination
        $add = new Adddestinationm;
        $add->destination_id = $data->destination_id;
        $add->name = $data->name;
        $add->city = $data->name;
        $add->coordx = $data->coordx;
        $add->coordy = $data->coordy;
        $add->price = $data->price;
        $add->description = $data->description;
        $add->type = $data->type;
        $add->regions = $data->region;
        $add->weather = $data->weather;
        $add->save();
        
         //inserting the videos
        $videos = $data->videos;
        $videosids = array();
        foreach($videos as $video){
            $addvideos = new Videos;
            //getting the ids
            $maxid = videos::select('id')->orderBy('id', 'desc')->first(); 
            $maxid = (int)$maxid['id'];
            $vid = $maxid+1;
            array_push($videosids,$vid);    
            //store url
            $addvideos->url = $video;
            $addvideos->save();
        }

        //inserting in destination and videos
        foreach($videosids as $video){
            $destination_videos = new Destination_Videos;
            $destination_videos->destination = $data->destination_id;
            $destination_videos->video = $video;
            $destination_videos->save();
        }       


        

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
                    if( $i+1 == $hotelv[$j][0] ){
                        print_r($hotelv[$j][1]);
                        $addv  = new Videos;
                        $addv->url = $hotelv[$j][1];
                        $addv->save();

                            $maxid = Videos::select('id')->orderBy('id', 'desc')->first(); 
                            $maxid = (int)$maxid['id'];
                            $videoid = $maxid;

                        $addhotelVideo= new Hotel_Videos;
                        $addhotelVideo->hotel= $hotelids[$i];
                        $addhotelVideo->video= $videoid;
                        $addhotelVideo->save();
                    }
                }
            }
    

            for($i=0; $i<count($hotels); $i++){
               $images = $hotels[$i][6][0];
               foreach($images as $image){
                    $addi = new Images;
                    $addi->url = $image;
                    $addi->save();

                    $maxid = Images::select('images_id')->orderBy('images_id', 'desc')->first(); 
                    $maxid = (int)$maxid['images_id'];
                    $imageid = $maxid;
                    $hotelids[$i];

        
                    $addhotelimage= new Hotel_Images;
                    $addhotelimage->images= $imageid;
                    $addhotelimage->hotel= $hotelids[$i];
                    $addhotelimage->save();

               }
            }
    
        
        
 
        // complete freelancer code

        $freelancer = $data->freelancers;
        $freelancerids = array();
          foreach($freelancer as $item){
            $maxid = freelancer::select('id')->orderBy('id', 'desc')->first(); 
            $maxid = (int)$maxid['id'];
            $hid = $maxid+1;
            array_push($freelancerids,$hid);
            $addf = new freelancer;
            $addf->name = $item[0];
            $addf->description = $item[1];
            $addf->price = $item[2];
            $addf->type = $item[3];
            $addf->save();
            
            $addd_f = new destination_freelancer;
            $addd_f->destination = $data->destination_id;
            $addd_f->freelancer = $hid;
            $addd_f->save();
        }


 
            $frelancerv = $data->freelancervideos;           

            for($i=0; $i<count($freelancerids); $i++){
                for($j=0; $j<count($frelancerv); $j++){
                    if( $i+1 == $frelancerv[$j][0] ){
                        print_r($frelancerv[$j][1]);
                        $addv  = new Videos;
                        $addv->url = $frelancerv[$j][1];
                        $addv->save();
                         


                        $maxid = Videos::select('id')->orderBy('id', 'desc')->first(); 
                        $maxid = (int)$maxid['id'];
                        $videoid = $maxid;


                        $addfreelancervideo= new freelancer_videos;
                        $addfreelancervideo->freelancer= $freelancerids[$i];
                        $addfreelancervideo->videos= $videoid;
                        $addfreelancervideo->save();
                    }
                }
            }
   
        
          

            
            for($i=0; $i<count($freelancer); $i++){
               $images = $freelancer[$i][4][0];
               foreach($images as $image){
                    $addi = new Images;
                    $addi->url = $image;
                    $addi->save();

                    $maxid = Images::select('images_id')->orderBy('images_id', 'desc')->first(); 
                    $maxid = (int)$maxid['images_id'];
                    $imageid = $maxid;
                    $freelancerids[$i];

                    $addfreelancerimages= new FreelancerImages;
                    $addfreelancerimages->images= $imageid;
                    $addfreelancerimages->freelancer= $freelancerids[$i];
                    $addfreelancerimages->save();
               }
            }













        // Complete Products code

        $product = $data->products;
        $productids = array();
          foreach($product as $item){
            $maxid = product::select('id')->orderBy('id', 'desc')->first(); 
            $maxid = (int)$maxid['id'];
            $hid = $maxid+1;
            array_push($productids,$hid);
            $addf = new product;
            $addf->name = $item[0];
            $addf->description = $item[1];
            $addf->price = $item[2];
            $addf->type = $item[3];
            $addf->save();
            
            $addd_f = new destination_product;
            $addd_f->destination = $data->destination_id;
            $addd_f->product = $hid;
            $addd_f->save();
        }

 
            $productv = $data->productvideos;           

            for($i=0; $i<count($productids); $i++){
                for($j=0; $j<count($productv); $j++){
                    if( $i+1 == $productv[$j][0] ){
                        print_r($productv[$j][1]);
                        $addv  = new Videos;
                        $addv->url = $productv[$j][1];
                        $addv->save();
        
                        
                        $maxid = Videos::select('id')->orderBy('id', 'desc')->first(); 
                        $maxid = (int)$maxid['id'];
                        $videoid = $maxid;
            

                        $addproductvideo= new ProductVideos;
                        $addproductvideo->product= $productids[$i];
                        $addproductvideo->video= $videoid;
                        $addproductvideo->save();
                    }
                }
            }
   


// there is error over here product images comes as object but not as array

            // print_r($freelancer[0][4]);
            // print_r($product[0][4]);
            
            
  //          for($i=0; $i<count($product); $i++){
            //    $images = $product[$i][4][0];
            //    foreach($images as $image){
            //         $addi = new Images;
            //         $addi->url = $image;
            //         $addi->save();

            //         $maxid = Images::select('images_id')->orderBy('images_id', 'desc')->first(); 
            //         $maxid = (int)$maxid['images_id'];
            //         $imageid = $maxid;
            //         $productids[$i];

            //         $addproductimages= new ProductImages;
            //         $addproductimages->images= $imageid;
            //         $addproductimages->product= $productids[$i];
            //         $addproductimages->save();
            //    }
            // }






        //Inserting the laws
        
            $laws = $data->laws;

            foreach($laws as $law){
                print_r($law);
                $add = new Laws;
                $add->type = $law[0];
                $add->content = $law[1];
                $add->save();

                $maxid = laws::select('id')->orderBy('id', 'desc')->first(); 
                $maxid = (int)$maxid['id'];
                $lawid = $maxid;

                $addd_l = new Destination_laws;
                $addd_l->destination = $data->destination_id;
                $addd_l->laws = $lawid;
                $addd_l->save();
            
            }

        
            print_r($data->contacts);



            
        //Inserting the contacts
        
            $contacts = $data->contacts;

            foreach($contacts as $contact){
                $add = new contact;
                $add->name = $contact[0];
                $add->contact_no = $contact[1];
                $add->type = $contact[2];
                $add->save();

                $maxid = contact::select('id')->orderBy('id', 'desc')->first(); 
                $maxid = (int)$maxid['id'];
                $contactid = $maxid;

                $addd_c = new destination_contact;
                $addd_c->destination = $data->destination_id;
                $addd_c->contact = $contactid;
                $addd_c->save();
            
            }



    return redirect('adddestination');
    }
    }