<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminUmkmController extends Controller
{
    public function index()
    {
        $umkms = Umkm::latest()->paginate(10);
        return view('admin.umkm.index', compact('umkms'));
    }

    public function create()
    {
        return view('admin.umkm.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('umkm', 'public');
        }

        Umkm::create($validated);

        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil ditambahkan.');
    }

    public function edit(Umkm $umkm)
    {
        return view('admin.umkm.edit', compact('umkm'));
    }

    public function update(Request $request, Umkm $umkm)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'owner' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_featured' => 'boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($umkm->image) {
                Storage::disk('public')->delete($umkm->image);
            }
            $validated['image'] = $request->file('image')->store('umkm', 'public');
        }

        $umkm->update($validated);

        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil diupdate.');
    }

    public function destroy(Umkm $umkm)
    {
        if ($umkm->image) {
            Storage::disk('public')->delete($umkm->image);
        }

        $umkm->delete();

        return redirect()->route('admin.umkm.index')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
