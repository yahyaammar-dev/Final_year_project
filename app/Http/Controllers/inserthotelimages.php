<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inserthotelimages extends Controller
{
    public function inserthotelimages(REQUEST $req){
        $id = $req->session()->get('newid');

        //upload.php
        if($_FILES["file"]["name"] != '')
        {
            $test = explode('.', $_FILES["file"]["name"]);
            $ext = end($test);
            $name = $_FILES["file"]["name"];
            $location = public_path('images\\') . $name;  
            move_uploaded_file($_FILES["file"]["tmp_name"], $location);
        }
    }
}