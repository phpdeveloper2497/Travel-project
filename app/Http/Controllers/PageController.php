<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


    public function gallery()
    {
        $galleries = Gallery::all();
//        $galleries = Gallery::last();
//        dd($galleries);
//        $mediaItems = Gallery::last()->getFirstMedia('gallery')->getUrl();
//        dd($mediaItems);
        return view('gallery', ['galleries' => $galleries]);
    }

//    public function footerimage()
//    {
//        $galleries = Gallery::all();
//
//        return view('components.footer', ['galleries' => $galleries]);
//    }

}
