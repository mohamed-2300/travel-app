<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Agency;

class AgencyController extends Controller
{
    public function index()
    {
        return response()->json(Agency::all());
    }

    public function show($id)
    {
        return response()->json(Agency::with('products')->findOrFail($id));
    }
}

