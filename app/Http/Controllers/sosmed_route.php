<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sosmed_route extends Controller
{
    public function home(){
        return redirect()->route('home');
    }

    public function socialmedia($tipe) {
        if($tipe === "instagram"){
            return redirect("https://www.instagram.com/tunbudi06");
        } elseif ($tipe === "github"){
            return redirect("https://github.com/tunbudi06");
        } elseif ($tipe === "telegram"){
            return redirect("http://t.me/TheUnknownName06");
        }
    }
}
