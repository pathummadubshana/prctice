<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;



class validate extends Controller
{
    function store(Request $req){
    
        $login = new login;
        $login->name = $req->name;
        $login->email = $req->email;
        $login->nic = $req->nic;
        $login->tel = $req->tel;
        $login->pass = $req->pass;
        $login->save();
        return redirect('login');

    }
}
