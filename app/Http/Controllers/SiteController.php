<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function homePage()
    {
        $info = [
            'name' => "Al Amin",
            'des' => "Professional Web Developer"
        ];
        return view('home',compact('info'));
        
       
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function servicePage()
    {
        return view('service');
    }
    public function portfolioPage()
    {
        return view('portfolio');
    }

    public function contactPage()
    {
        return view('contact');
    }
}
