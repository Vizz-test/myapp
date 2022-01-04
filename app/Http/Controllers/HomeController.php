<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('admin/dashboard');
    }
    
    public function about(){
        return view('admin/about');
    }
    
    public function contact(){
        return view('admin/contact');
    }
    //commit change

    public function _404(){
        return view('admin/404');
    }
}
