<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MasudController;

class MasudController extends Controller
{
    public function font(){
        return view('layouts.master');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function from(){
        return view('from');
    }
}
