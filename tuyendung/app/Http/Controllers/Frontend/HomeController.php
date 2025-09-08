<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //trang home
    public function index(){
        return view ("Frontend/home");

    }

    public function job(){
        return view ("Frontend/job");

    }

    public function chitietvieclam(){
        return view ("Frontend/chitietvieclam");

    }

    public function chitietcongty(){
        return view ("Frontend/chitietcongty");

    }

    public function dangtin(){
        return view ("Frontend/dangtin");

    }

    
    //
}
