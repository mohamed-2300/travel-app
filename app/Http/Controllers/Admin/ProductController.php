<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Agency;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('agency')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $agencies = Agency::all();
        return view('admin.products.create', compact('agencies'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'departure' => 'nullable|string|max:255',
            'agency_id' => 'required|exists:agencies,id',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'whatsapp_number' => 'nullable|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('products', 'public');
                $images[] = 'storage/' . $path;
            }
        }

        $product = new Product($validated);

        $product->features = $request->input('features', []);
        $product->itinerary = $request->input('itinerary', []);
        $product->included = $request->input('included', []);
        $product->excluded = $request->input('excluded', []);
        $product->images = $images;

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Produit créé avec succès.');
    }

    public function edit(Product $product)
    {
        $agencies = Agency::all();
        return view('admin.products.edit', compact('product', 'agencies'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'departure' => 'nullable|string|max:255',
            'agency_id' => 'required|exists:agencies,id',
            'description' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'whatsapp_number' => 'nullable|string|max:255',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle new uploaded images if any
        $images = $product->images ?? [];
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $file) {
                $path = $file->store('products', 'public');
                $images[] = 'storage/' . $path;
            }
        }

        $product->update($validated);

        $product->features = $request->input('features', []);
        $product->itinerary = $request->input('itinerary', []);
        $product->included = $request->input('included', []);
        $product->excluded = $request->input('excluded', []);
        $product->images = $images;

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Produit supprimé avec succès.');
    }
}
