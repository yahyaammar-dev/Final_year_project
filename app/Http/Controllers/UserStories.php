<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userblogsm;

class UserStories extends Controller
{
    public function userstories(){
        $data = userblogsm::select("name","content")->get();
                // building the array 
                return view('userstroies', [
                    'dataa'=>$data,
                   ]);
    }
}
