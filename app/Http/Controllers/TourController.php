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
        $tours = Tour::query()->where('status', 1)->get();
//        dd($tours);
        return view('tours.index', ['tours' => $tours]);
    }


    public function create()
    {

    }


    public function store(StoreBookRequest $request)
    {
         Book::create([
//            "tour_id" => $request->input('tourId'),
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "phone" => $request->phone,
            "description" => $request->commnet,
        ]);
        return redirect()->route('tours.index');
    }


    public function show(Tour $tour)
    {
        return view('tours.show', ['tour' => $tour]);

    }


    public function destroy(string $id)
    {
        //
    }
}
