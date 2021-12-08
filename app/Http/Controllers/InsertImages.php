<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Images;
use App\Models\Destination_images;

class InsertImages extends Controller
{
    public function InsertImages(REQUEST $req){
        
    
        $id = $req->session()->get('newid');
    

        //upload.php
        if($_FILES["file"]["name"] != '')
        {
            $test = explode('.', $_FILES["file"]["name"]);
            $ext = end($test);
            $name = $_FILES["file"]["name"];
            $location = public_path('images\\') . $name;  
            move_uploaded_file($_FILES["file"]["tmp_name"], $location);
            

            $maxid = Images::select('images_id')->orderBy('images_id', 'desc')->first(); 
            $maxid = (int)$maxid['images_id'];
            $imgid = $maxid+1;

            $add = new Images;
            $add->url = $name;
            $add->save();

            $adddi = new Destination_images;
            $adddi->destination_id = $id;
            $adddi->image_id = $imgid; 
            $adddi->save();

        }





    } 
}
