<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend_controller extends Controller
{
    public function __construct(){

    }
    public function index(){
        
    	return view('frontend.pages.index');
    }
    public function contact_us(){
    	return view('frontend.pages.contact_us');
    }
    public function gallery(){
    	return view('frontend.pages.full_width_gallery');
    }
    public function news(){
    	return view('frontend.pages.news_updates');
    }
    public function upcoming_events(){
    	return view('frontend.pages.upcoming_events');
    }
    public function profile(){
      
    }
}
