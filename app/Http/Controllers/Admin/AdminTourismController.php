<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tourism;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTourismController extends Controller
{
    public function index()
    {
        $tourisms = Tourism::latest()->paginate(10);
        return view('admin.tourism.index', compact('tourisms'));
    }

    public function create()
    {
        return view('admin.tourism.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('tourism', 'public');
        }

        Tourism::create($validated);

        return redirect()->route('admin.tourism.index')->with('success', 'Data wisata berhasil ditambahkan.');
    }

    public function edit(Tourism $tourism)
    {
        return view('admin.tourism.edit', compact('tourism'));
    }

    public function update(Request $request, Tourism $tourism)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'latitude' => 'nullable|numeric|between:-90,90',
            'longitude' => 'nullable|numeric|between:-180,180',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($tourism->image) {
                Storage::disk('public')->delete($tourism->image);
            }
            $validated['image'] = $request->file('image')->store('tourism', 'public');
        }

        $tourism->update($validated);

        return redirect()->route('admin.tourism.index')->with('success', 'Data wisata berhasil diupdate.');
    }

    public function destroy(Tourism $tourism)
    {
        if ($tourism->image) {
            Storage::disk('public')->delete($tourism->image);
        }

        $tourism->delete();

        return redirect()->route('admin.tourism.index')->with('success', 'Data wisata berhasil dihapus.');
    }
}
