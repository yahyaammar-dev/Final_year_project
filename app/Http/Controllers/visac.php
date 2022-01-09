<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visam;

class visac extends Controller
{
    public function visac(REQUEST $req){
        $country = $_POST["countryname"];

        $data = visam::select("name","content")->where("name",$country)->get();

        echo $data;

    }
}
