<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    public function index()
    {
        return view('equipment.index');
    }

    public function create()
    {
        return view('equipment.create');
    }

    public function edit($id)
    {
        return view('equipment.edit', ['equip_id' => $id]);
    }

    public function classes()
    {
        return view('equipment.classes');
    }

    public function voltageLevels()
    {
        return view('equipment.voltage-levels');
    }
}
