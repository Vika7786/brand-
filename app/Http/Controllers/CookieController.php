<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CookieController extends Controller
{
    public function getClose(){
        if(!isset($_COOKIE["close"])){
            setcookie("close","true",time()+3600*24,"/");
        }
        return redirect()->back();
    }

}
