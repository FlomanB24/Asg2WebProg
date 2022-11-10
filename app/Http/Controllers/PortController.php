<?php

namespace App\Http\Controllers;
use App\Models\Port;
use Illuminate\Http\Request;

class PortController extends Controller
{
    public function index(){
        return view ('ports',[
            "title" => "MyPortfolios",
            "ports" => Post::all()
        ]);
    }
}
