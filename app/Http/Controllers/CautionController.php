<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CautionController extends Controller
{
    public function index()
    {
        return view('cautions.index');
    }
}
