<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTicketRequest;
use App\Models\Gallery;
use App\Models\Partner;
use App\Models\Place;
use App\Models\Ticket;
use App\Models\Tour;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $partners = Partner::query()->where('status', '=', true)->orderBy('sort_order')->get();
        $places = Place::query()->with('media', 'tours')->where('status', '=', true)->orderBy('sort_order')->get();
        $banner_tours = Tour::query()->with('media', 'place')
            ->where('status', '=', 1)
            ->where('banner', '=', true)
            ->get();
        $top_tours = Tour::query()->with('media', 'place')
            ->where('status', '=', 1)
            ->where('top', '=', true)
            ->get();
        return view('home', [
            'partners' => $partners->load('media'),
            'places' => $places,
            'banner_tours' => $banner_tours,
            'top_tours' => $top_tours,
        ]);
    }

    public function about()
    {
        $partners = Partner::query()->where('status', '=', true)->orderBy('sort_order')->get();
        return view('about', [
            'partners' => $partners->load('media')
        ]);
    }

    public function contact()
    {
        return view('contact');
    }


    public function gallery()
    {
        $galleries = Gallery::query()->with('media')->get();
        return view('gallery',
            [
                'galleries' => $galleries
            ]
        );
    }


    public function createTicket(CreateTicketRequest $request)
    {
        Ticket::create($request->validated());
        $request->session()->flash('successMsg', __('Your ticket accepted'));
        return back();
    }

//    public function footerimage()
//    {
//        $galleries = Gallery::all();
//
//        return view('components.footer', ['galleries' => $galleries]);
//    }

}
