<?php

namespace App\Http\Controllers;
use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function myHome(){
        return view('home',[
            "title" => "Home"
        ]);
    }
    public function index(){
        return view ('ports',[
            "title" => "MyPortfolios",
            "ports" => Port::all()
        ]);
    }

    public function detailProject($subtitle){
        return view ('port',[
            "title" => "MyPortfolios",
            "port" => Port::find($subtitle)
        ]);
    }

    public function aboutMe(){
        return view ('about', [
            "title" => "About",
            "name" => "Gabriel Rolly Davinsi",
            "email" => "gabriel.davinsi@binus.ac.id",
            "picture" => "emo.jpg",
            "flat" => "flat.png",
            "nim" => "(2440071582)"
        ]);
    }
}
