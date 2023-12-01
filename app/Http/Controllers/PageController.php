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
//        $mediaItems = $galleries->getMedia("*");
//        ->getFirstMedia('gallaries');
//        dd($galleries);
        return view('gallery', ['galleries' => $galleries);
    }

}
