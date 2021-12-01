<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homedestinationm;
use App\Models\Homefreelancers;
use App\Models\Homeproductsm;

class Homeitems extends Controller
{
    public function Listitems(){
        $dest[0] = Homedestinationm::all()->take(4);
        $dest[1] = Homefreelancers::all()->take(4);
        $dest[2] = Homeproductsm::all()->take(4);
        return view('home',[
            'dest'=>$dest
        ]);
    }
}