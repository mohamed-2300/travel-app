<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    // public function index()
    // {
    //     return response()->json(Product::with('agency')->get());
    // }

    public function show($id)
    {
        return response()->json(Product::with('agency')->findOrFail($id));
    }

    public function index()
{
    $query = Product::with('agency');

    // Ajouter un filtre si on reçoit agency_id dans l'URL
    if (request()->has('agency_id')) {
        $query->where('agency_id', request('agency_id'));
    }

    return response()->json($query->get());
}

}

