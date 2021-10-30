<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adddestinationm;

class Listdestinations extends Controller
{
    public function Listdestinations(){
        $dest = Adddestinationm::all();
        $type = "Destinations";
        return view('destinationlisting',['dest'=>$dest, 'type'=>$type]);
    }
}
