<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adddestinationm;


class filterdestination extends Controller
{
    public function Listdestinations(){
        $dest = Adddestinationm::all()->where('type', 'Religious');
        return $dest;
    }
}