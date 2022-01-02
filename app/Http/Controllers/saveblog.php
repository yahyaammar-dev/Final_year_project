<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userblogsm;

class saveblog extends Controller
{
    public function saveblog(REQUEST $req){
        $data = $_POST['editorContent'];
        $data2 = $_POST['name'];

        $add = new userblogsm;
        $add->content = $data;   
        $add->name = $data2;
        $add->save();

    }
}
