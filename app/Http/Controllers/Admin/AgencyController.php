<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;

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
            'image' => 'nullable|string',
        ]);

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
            'image' => 'nullable|string',
        ]);

        $agency->update($validated);
        return redirect()->route('admin.agencies.index')->with('success', 'Agence mise à jour avec succès.');
    }

    public function destroy(Agency $agency)
    {
        $agency->delete();
        return redirect()->route('admin.agencies.index')->with('success', 'Agence supprimée avec succès.');
    }
}
