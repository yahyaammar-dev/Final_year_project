<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userblogsm;

class SingleUserStory extends Controller
{
    public function SingleUserStory($unique){
        $id = $unique;

        $item  = userblogsm::select("content","name")->where("blog_id",$id)->get();
        return view('userstotydetail', ['dataa'=>$item]);
    }
}
