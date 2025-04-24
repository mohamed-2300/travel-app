<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Agency;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('agency')->paginate(10);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $agencies = Agency::all();
        return view('admin.products.create', compact('agencies'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'agency_id' => 'required|exists:agencies,id',
            'type' => 'required|in:omra,hajj',
            'price' => 'required|numeric',
            'departure' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        Product::create($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Offre créée avec succès');
    }

    public function edit(Product $product)
    {
        $agencies = Agency::all();
        return view('admin.products.edit', compact('product', 'agencies'));
    }

    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'agency_id' => 'required|exists:agencies,id',
            'type' => 'required|in:omra,hajj',
            'price' => 'required|numeric',
            'departure' => 'required|string',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $product->update($data);

        return redirect()->route('admin.products.index')
            ->with('success', 'Offre mise à jour avec succès');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')
            ->with('success', 'Offre supprimée avec succès');
    }
}