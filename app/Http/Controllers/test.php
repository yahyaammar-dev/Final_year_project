<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class test extends Controller
{
    public function test(Request $req){


        $data = $_POST["d_id"];


        $data = '<h1>' . $data . '</h1>';

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML($data);
        return $pdf->stream();
    }
}