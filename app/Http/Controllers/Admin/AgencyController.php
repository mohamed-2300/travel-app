<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = Agency::all();
        return view('admin.agencies.index', compact('agencies'));
    }

    public function create()
    {
        return view('admin.agencies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'website' => 'nullable|url',
            'smallDescription' => 'nullable|string',
            'bigDescription' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // ✅ C'est un fichier image !
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('agencies', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        Agency::create($validated);

        return redirect()->route('admin.agencies.index')->with('success', 'Agence créée avec succès.');
    }

    public function edit(Agency $agency)
    {
        return view('admin.agencies.edit', compact('agency'));
    }

    public function update(Request $request, Agency $agency)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'address' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'website' => 'nullable|url',
            'smallDescription' => 'nullable|string',
            'bigDescription' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // ✅
        ]);

        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($agency->image && file_exists(public_path($agency->image))) {
                unlink(public_path($agency->image));
            }

            $path = $request->file('image')->store('agencies', 'public');
            $validated['image'] = 'storage/' . $path;
        }

        $agency->update($validated);

        return redirect()->route('admin.agencies.index')->with('success', 'Agence mise à jour avec succès.');
    }

    public function destroy(Agency $agency)
    {
        // Supprimer l'image associée si elle existe
        if ($agency->image && file_exists(public_path($agency->image))) {
            unlink(public_path($agency->image));
        }

        $agency->delete();

        return redirect()->route('admin.agencies.index')->with('success', 'Agence supprimée avec succès.');
    }
}
