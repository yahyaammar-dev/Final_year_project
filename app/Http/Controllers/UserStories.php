<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userblogsm;

class UserStories extends Controller
{
    public function userstories(){
        $data = userblogsm::select("blog_id","name","content")->get();


        $info = [];

        for($i=0; $i<count($data); $i++){
            $info[$i]["name"] = $data[$i]->name;
            $info[$i]["blog_id"] = $data[$i]->blog_id;
            $info[$i]["content"] =  html_entity_decode($data[0]->content);
        }

        return view("userstroies", [
            'dataa' => $info
        ]);


    }
}
