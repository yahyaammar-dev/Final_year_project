<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletterm;


class Newsletter extends Controller
{
    public function register(Request $req){
        $news = new Newsletterm;
        $news->email =  $req->email;
        $news->save();
        return redirect('/');
    }
}
