<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Models\Book;
use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{

    public function index()
    {
        $tours = Tour::query()->with('place', 'media')->where('status', 1)->get();
//        dd($tours);
        return view('tours.index', ['tours' => $tours]);
    }


    public function create()
    {

    }


    public function store(StoreBookRequest $request)
    {
        Book::create($request->validated());
        $request->session()->flash('successMsg', __('Successfully booked'));
        return redirect()->back();
    }


    public function show(Tour $tour)
    {
        $tour->load('place', 'media');
        return view('tours.show', ['tour' => $tour]);

    }


    public function destroy(string $id)
    {
        //
    }
}
