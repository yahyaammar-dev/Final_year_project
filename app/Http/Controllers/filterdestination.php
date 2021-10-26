<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adddestinationm;


class filterdestination extends Controller
{
    public function Listdestinations(Request $req){
        
         $data = json_decode($req['info']);
        for($i=0; $i<count($data); $i++){
            if($data[$i] == 'religious' || $data[$i] == 'adventourous' || $data[$i] == 'historical' ){
                $dest[$i] = Adddestinationm::all()->where('type', $data[$i]);
            }
            if($data[$i] == 'normal' || $data[$i] == 'hot' || $data[$i] == 'cool' ){
                $dest[$i] = Adddestinationm::all()->where('weather', $data[$i]);
            }
            if($data[$i] == 'punjab' || $data[$i] == 'sindh' || $data[$i] == 'balouchistan' || $data[$i] == 'kpk' ){
                $dest[$i] = Adddestinationm::all()->where('regions', $data[$i]);
            }
        }
        $data = json_encode($dest);
        return $data;
    }
}