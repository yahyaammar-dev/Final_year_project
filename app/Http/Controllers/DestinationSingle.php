<?php

namespace App\Http\Controllers;
use App\Models\Adddestinationm;

use Illuminate\Http\Request;

class DestinationSingle extends Controller
{
    public function SingleDestination(REQUEST $req){
        $id = $req['id'];
        $data = Adddestinationm::all()->where('destination_id', $id);
        return view('destinations');
    }
}