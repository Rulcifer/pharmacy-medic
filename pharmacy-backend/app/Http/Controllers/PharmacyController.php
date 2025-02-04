<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pharmacy;

class PharmacyController extends Controller
{
    public function index()
    {
        return Pharmacy::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'image' => 'required|string',
        ]);

        return Pharmacy::create($request->all());
    }

    public function destroy($id)
    {
        Pharmacy::destroy($id);
        return response()->json(['message' => 'Pharmacy deleted']);
    }
}
