<?php

namespace App\Http\Controllers;

use App\News;
use App\Event;
use App\Testimonial;
use Illuminate\Http\Request;

class Frontend_controller extends Controller
{
    public function index(){
        $newses = News::all();
        $events = Event::all();
        $testimonials = Testimonial::all();
        return $newses;
        return view('frontend.pages.index',compact('newses','events','testimonials'));
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
