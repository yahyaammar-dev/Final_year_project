<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\destination_contact;
use App\Models\contact;
use App\Models\Adddestinationm;

use App;

class test extends Controller
{
    public function test(Request $req){
        
        $data = $_POST["d_id"];

        $destination_data = Adddestinationm::select("name")->where("destination_id",$data)->get();

        $info = destination_contact::select("contact")->where("destination",$data)->get();
        
        // getting all the contacts        
        $contacts = [];
        foreach($info as $item){
            $contact =  contact::select("name","contact_no","type")->where("id",$item["contact"])->get();    
            array_push($contacts,$contact);
        }

        $data = '<h1> Contact Directory for ' . $destination_data[0]["name"] . '</h1>';

        foreach($contacts as $contact){
            $data = $data . '<p>' . json_encode($contact[0]) . '</p>';
        }

        $data = $data . '<h1>' . 'Fuel Details' . '</h1>';

        $data = $data .  $_POST["div1"];
        $data  = $data . '<br>';
        $data = $data .  $_POST["div2"];

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}