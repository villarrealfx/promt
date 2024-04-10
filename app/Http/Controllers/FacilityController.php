<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        return view('facilities.index');
    }

    public function types()
    {
        return view('facilities.types');
    }
}
