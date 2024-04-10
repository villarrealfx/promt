<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnomalyController extends Controller
{

    public function index()
    {
        return view('anomalies.index');
    }

    public function create()
    {
        return view('anomalies.create');
    }

    public function edit()
    {
        return view('anomalies.edit');
    }

}
