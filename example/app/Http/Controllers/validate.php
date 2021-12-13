<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\login;


class validate extends Controller
{
    public function store(Request $request){
    
        dd($request->all());


    }
}
