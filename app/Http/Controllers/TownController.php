<?php

namespace App\Http\Controllers;

use App\Models\OldTown;
use Illuminate\Http\Request;

class TownController extends Controller
{
    public function index(Request $request)
    {
        $province_id = $request->province_id;
        $towns = OldTown::where ('province_id', $province_id)->get();

        return view('towns.index', compact('towns', 'province_id'));
    }
    public function detail(Request $request)
    {
        $province_id = $request->province_id;
        $id = $request->id;

        $town = OldTown::where('province_id', $province_id)->where('id', $id)->first();

        return view('towns.detail', compact('town'));
    }
}
