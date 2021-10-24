<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinm;
use Illuminate\Support\Facades\DB;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class Userin extends Controller
{
    public function insertUser(Request $req){
        $Userinm = new Userinm;
        $Userinm->name= $req->name;
        $Userinm->email= $req->email;
        $Userinm->pass= $req->password;
        $Userinm->phone= $req->phone;
        $Userinm->account_status=  'false';
        $Userinm->save();
        Mail::to('yahyaammar6gjrk@gmail.com')->send(new OrderShipped());
        return redirect('login');
    }
}