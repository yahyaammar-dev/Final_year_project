<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinm;
use Illuminate\Support\Facades\DB;
use App\Models\orders;


class Useraccount extends Controller
{
    public function Showaccount(){

        $user = session('user');

        echo $user;

        $products = orders::select('product_ids')->where('user_id',$user['id'])->get();

        return view('useraccount',['user'=>$user, 'product'=>$products]);
    }
}