<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function list()
    {

        return view('destinations.list');
    }

    public function detail()
    {
        return view('destinations.detail');
    }
}
