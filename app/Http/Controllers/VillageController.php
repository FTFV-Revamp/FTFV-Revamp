<?php

namespace App\Http\Controllers;

use App\Models\OldVillage;
use Illuminate\Http\Request;

class VillageController extends Controller
{
    public function index(Request $request)
    {
        $province_id = $request->province_id;
        $villages = OldVillage::where ('province_id', $province_id)->get();

        return view('villages.index', compact('villages', 'province_id'));
    }

    public function detail(Request $request)
    {
        $province_id = $request->province_id;
        $id = $request->id;

        $village = OldVillage::where('province_id', $province_id)->where('id', $id)->first();

        return view('villages.detail', compact('village'));
    }
}
