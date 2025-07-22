<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $categories = Umkm::distinct()->pluck('category');

        $umkms = Umkm::when($request->category, function ($query, $category) {
            return $query->where('category', $category);
        })
            ->when($request->search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%");
            })
            ->latest()
            ->paginate(12);

        return view('umkm.index', compact('umkms', 'categories'));
    }

    public function show(Umkm $umkm)
    {
        $relatedUmkms = Umkm::where('category', $umkm->category)
            ->where('id', '!=', $umkm->id)
            ->take(3)
            ->get();

        return view('umkm.show', compact('umkm', 'relatedUmkms'));
    }
}
