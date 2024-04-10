<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermitController extends Controller
{
    public function index()
    {
        return view('permits.index');
    }

    public function create()
    {
        return view('permits.create');
    }

    public function edit($id)
    {
        return view('permits.edit', ['permit_id' => $id]);
    }

    public function open($id)
    {
        return view('permits.open', ['permit_id' => $id]);
    }

    public function close($id)
    {
        return view('permits.close', ['permit_id' => $id]);
    }
}
