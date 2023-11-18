<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{

    public function index()
    {
       return view('tours.index');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        return view('tours.show');

    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
