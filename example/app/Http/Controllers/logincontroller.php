<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;

class logincontroller extends Controller
{
    function show(){
        $data= login::all();
        return view('detail',['details'=>$data]);
    }
}
